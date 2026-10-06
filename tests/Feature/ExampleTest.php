<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
    }

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_osman_gani_about_page_returns_a_successful_response(): void
    {
        $response = $this->get('/osman-gani');

        $response->assertStatus(200);
        $response->assertSee('OSMAN GANI');
    }

    public function test_the_media_events_page_returns_a_successful_response(): void
    {
        $response = $this->get('/media-events');

        $response->assertStatus(200);
        $response->assertSee('MEDIA &amp; EVENTS', false);
    }

    public function test_the_life_mission_page_returns_a_successful_response(): void
    {
        $response = $this->get('/life-mission');

        $response->assertStatus(200);
        $response->assertSee('LIFE MISSION');
        $response->assertSee('Life Journey &amp; Mission', false);
    }

    public function test_the_books_page_returns_a_successful_response(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
        $response->assertSee('ACHIEVE MORE SUCCEED FASTER');
    }

    public function test_the_speaking_page_returns_a_successful_response(): void
    {
        $response = $this->get('/speaking');

        $response->assertStatus(200);
        $response->assertSee('Keynote Speeches');
    }

    public function test_the_courses_page_returns_a_successful_response(): void
    {
        $response = $this->get('/courses');

        $response->assertStatus(200);
        $response->assertSee('AI Mastery Program');
    }

    public function test_the_events_page_returns_a_successful_response(): void
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
        $response->assertSee('Train The Trainer');
    }

    public function test_the_free_videos_page_returns_a_successful_response(): void
    {
        $response = $this->get('/free-videos-library');

        $response->assertStatus(200);
        $response->assertSee('Free Video Library');
    }

    public function test_the_contact_page_returns_a_successful_response(): void
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
        $response->assertSee('Contact Office');
    }

    public function test_the_legal_pages_return_successful_responses(): void
    {
        $this->get('/privacy-policy')->assertStatus(200);
        $this->get('/terms-of-usage')->assertStatus(200);
    }

    public function test_admin_login_page_renders_successfully(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('Sign In');
        $response->assertSee('admin@osmangani.com');
    }

    public function test_unauthenticated_user_cannot_access_admin_dashboard(): void
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_login_with_valid_credentials(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@osmangani.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticated();
    }

    public function test_admin_dashboard_renders_for_authenticated_admin(): void
    {
        $admin = User::where('email', 'admin@osmangani.com')->first();

        $response = $this->actingAs($admin)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Administrative Overview');
    }

    public function test_admin_can_create_a_book(): void
    {
        $admin = User::where('email', 'admin@osmangani.com')->first();

        $response = $this->actingAs($admin)->post('/admin/books', [
            'title' => 'THE SPEED OF INFLUENCE',
            'subtitle' => 'How to Command Attention in 3 Seconds',
            'price' => '$19.99 / ৳850',
            'languages' => 'English, Bengali',
            'buy_link' => 'https://amazon.com',
            'is_bestseller' => '1',
            'sort_order' => 4,
        ]);

        $response->assertRedirect('/admin/books');
        $this->assertDatabaseHas('books', ['title' => 'THE SPEED OF INFLUENCE']);
    }

    public function test_visitor_can_submit_contact_form(): void
    {
        $response = $this->post('/contact-us', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '+880 1711-223344',
            'organization' => 'Acme Corp',
            'inquiry_type' => 'Keynote Speaking / Corporate Event',
            'message' => 'We would love to invite Osman Gani for our annual tech summit.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contact_messages', ['email' => 'johndoe@example.com']);
    }

    public function test_admin_can_logout(): void
    {
        $admin = User::where('email', 'admin@osmangani.com')->first();

        $response = $this->actingAs($admin)->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest();
    }
}
