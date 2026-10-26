<?php

namespace Tests\Feature;

use App\Models\SiteSetting;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminHomePageTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
        $this->admin = User::where('email', 'admin@osmangani.com')->first();
    }

    public function test_unauthenticated_user_cannot_access_homepage_admin_panel(): void
    {
        $response = $this->get('/admin/homepage');

        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_view_homepage_admin_panel(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin/homepage');

        $response->assertStatus(200);
        $response->assertSee('Home Page Management');
        $response->assertSee('Hero Video &amp; Speaker Card', false);
        $response->assertSee('YouTube Video URL');
    }

    public function test_admin_can_update_hero_text_and_youtube_url(): void
    {
        $response = $this->actingAs($this->admin)->post('/admin/homepage', [
            'hero_badge' => 'Master Your Future 2026',
            'hero_heading_line1' => 'Scale Your',
            'hero_heading_highlight1' => 'Vision',
            'hero_heading_line2' => ', Dominate Your',
            'hero_heading_highlight2' => 'Market',
            'hero_tagline' => 'Updated leadership and scaling blueprint by Osman Gani.',
            'hero_btn_primary_text' => 'Start Learning Now',
            'hero_btn_primary_url' => '/courses#mastery',
            'hero_btn_secondary_text' => 'Book Speaker Session',
            'hero_btn_secondary_url' => '/speaking#book',
            'hero_stat1_value' => '750K+',
            'hero_stat1_label' => 'Entrepreneurs Trained',
            'hero_stat2_value' => '2.5 Billion+',
            'hero_stat2_label' => 'Total Views',
            'hero_stat3_value' => '5.0 / 5.0',
            'hero_stat3_label' => 'Flawless Rating',
            'hero_video_type' => 'youtube',
            'hero_video_youtube_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'hero_video_title' => 'The Secrets to Exponential Wealth',
            'hero_video_duration' => '5 min',
            'hero_video_label' => 'Watch Masterclass',
            'hero_speaker_name' => 'COACH OSMAN GANI',
            'hero_speaker_title' => 'Global Keynote Strategist',
            'hero_speaker_badge' => 'Author of 6 Bestsellers',
            'hero_motto_text' => 'Impact | Growth | Freedom | Mastery',
        ]);

        $response->assertRedirect('/admin/homepage');
        $response->assertSessionHas('success');

        $this->assertSame('Master Your Future 2026', SiteSetting::get('hero_badge'));
        $this->assertSame('dQw4w9WgXcQ', preg_replace('/.*embed\/([a-zA-Z0-9_-]{11}).*/', '$1', SiteSetting::formatYouTubeEmbedUrl(SiteSetting::get('hero_video_youtube_url'))));

        // Check that homepage reflects updated settings
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('Master Your Future 2026');
        $homeResponse->assertSee('Scale Your');
        $homeResponse->assertSee('Vision');
        $homeResponse->assertSee('Dominate Your');
        $homeResponse->assertSee('Market');
        $homeResponse->assertSee('750K+');
        $homeResponse->assertSee('The Secrets to Exponential Wealth');
        $homeResponse->assertSee('https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1');
    }

    public function test_admin_can_upload_mp4_video_and_playback_is_configured_on_homepage(): void
    {
        Storage::fake('public');

        $fakeVideo = UploadedFile::fake()->create('custom-intro.mp4', 2048, 'video/mp4');

        $response = $this->actingAs($this->admin)->post('/admin/homepage', [
            'hero_video_type' => 'upload',
            'hero_video_file' => $fakeVideo,
            'hero_video_title' => 'Exclusive High-Performance Training',
            'hero_video_duration' => '3 min',
        ]);

        $response->assertRedirect('/admin/homepage');
        $response->assertSessionHas('success');

        $storedPath = SiteSetting::get('hero_video_file');
        $this->assertNotNull($storedPath);
        Storage::disk('public')->assertExists($storedPath);
        $this->assertSame('upload', SiteSetting::get('hero_video_type'));

        // Verify that homepage shows the uploaded video source in data attributes
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('data-video-type="upload"', false);
        $homeResponse->assertSee('storage/'.$storedPath, false);
    }

    public function test_admin_can_remove_uploaded_video(): void
    {
        Storage::fake('public');

        $fakeVideo = UploadedFile::fake()->create('temp.mp4', 1024, 'video/mp4');
        $storedPath = $fakeVideo->store('videos/hero', 'public');
        SiteSetting::set('hero_video_file', $storedPath, 'hero');
        SiteSetting::set('hero_video_type', 'upload', 'hero');

        $response = $this->actingAs($this->admin)->delete('/admin/homepage/video');

        $response->assertRedirect('/admin/homepage');
        $this->assertNull(SiteSetting::get('hero_video_file'));
        $this->assertSame('youtube', SiteSetting::get('hero_video_type'));
        Storage::disk('public')->assertMissing($storedPath);
    }

    public function test_admin_can_upload_and_remove_speaker_image(): void
    {
        Storage::fake('public');

        $fakeImage = UploadedFile::fake()->image('speaker.jpg');

        $response = $this->actingAs($this->admin)->post('/admin/homepage', [
            'hero_video_type' => 'youtube',
            'hero_speaker_image' => $fakeImage,
        ]);

        $response->assertRedirect('/admin/homepage');
        $storedPath = SiteSetting::get('hero_speaker_image');
        $this->assertNotNull($storedPath);
        Storage::disk('public')->assertExists($storedPath);

        // Delete speaker image
        $deleteResponse = $this->actingAs($this->admin)->delete('/admin/homepage/speaker-image');
        $deleteResponse->assertRedirect('/admin/homepage');
        $this->assertNull(SiteSetting::get('hero_speaker_image'));
        Storage::disk('public')->assertMissing($storedPath);
    }
}
