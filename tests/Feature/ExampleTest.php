<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
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
}
