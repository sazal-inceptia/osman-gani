<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Book;
use App\Models\Course;
use App\Models\Event;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@osmangani.com'],
            [
                'name' => 'Osman Gani Admin',
                'password' => Hash::make('password123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed Default Site Settings
        $settings = [
            ['key' => 'site_title', 'value' => 'Osman Gani | Author • Motivational Speaker • Business Coach', 'group' => 'general', 'label' => 'Site Title', 'type' => 'text'],
            ['key' => 'phone', 'value' => '+880 1700-000000', 'group' => 'contact', 'label' => 'Support Phone', 'type' => 'text'],
            ['key' => 'email', 'value' => 'support@osmangani.com', 'group' => 'contact', 'label' => 'Official Email', 'type' => 'email'],
            ['key' => 'address', 'value' => 'Gulshan 2, Dhaka 1212, Bangladesh', 'group' => 'contact', 'label' => 'Office Address', 'type' => 'textarea'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com', 'group' => 'social', 'label' => 'Facebook URL', 'type' => 'url'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com', 'group' => 'social', 'label' => 'Instagram URL', 'type' => 'url'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com', 'group' => 'social', 'label' => 'YouTube Channel URL', 'type' => 'url'],
            ['key' => 'whatsapp_url', 'value' => 'https://whatsapp.com', 'group' => 'social', 'label' => 'WhatsApp Contact Link', 'type' => 'url'],
            ['key' => 'hero_heading', 'value' => 'Transform Your Mindset, Multiply Your Business', 'group' => 'hero', 'label' => 'Hero Headline', 'type' => 'text'],
            ['key' => 'hero_tagline', 'value' => 'Bestselling author, keynote speaker, and business coach mentoring 500,000+ leaders across 50+ countries.', 'group' => 'hero', 'label' => 'Hero Subtitle', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 3. Seed Default Books
        $books = [
            [
                'title' => 'ACHIEVE MORE, SUCCEED FASTER',
                'subtitle' => 'The Proven Blueprint For Breakthrough In Sales, Wealth & Human Potential',
                'description' => 'A #1 International Bestseller with over 200,000+ copies sold. Packed with 21 actionable laws for rapid personal and financial growth.',
                'price' => '$14.99 / ৳650',
                'languages' => 'English, Bengali, Hindi (9 Languages)',
                'buy_link' => 'https://amazon.com',
                'amazon_link' => 'https://amazon.com',
                'rating' => 4.9,
                'reviews_count' => 1420,
                'is_bestseller' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'BE A NETWORK MARKETING MILLIONAIRE',
                'subtitle' => 'Secrets Of Building A Global Sales Dynasty From Zero',
                'description' => 'The ultimate industry handbook explaining recruiting, retention, system duplicate-ability, and leadership cultivation.',
                'price' => '$12.99 / ৳550',
                'languages' => 'English, Bengali',
                'buy_link' => 'https://amazon.com',
                'amazon_link' => 'https://amazon.com',
                'rating' => 4.9,
                'reviews_count' => 980,
                'is_bestseller' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'THE 4-HOUR WORKDAY BLUEPRINT',
                'subtitle' => 'High-Leverage Execution Systems For Founders & Executives',
                'description' => 'Eliminate distraction, deploy asynchronous delegation, and generate 10x commercial outputs in less time.',
                'price' => '$16.99 / ৳750',
                'languages' => 'English, Bengali',
                'buy_link' => 'https://amazon.com',
                'amazon_link' => 'https://amazon.com',
                'rating' => 4.8,
                'reviews_count' => 640,
                'is_bestseller' => false,
                'sort_order' => 3,
            ],
        ];

        foreach ($books as $book) {
            Book::updateOrCreate(['title' => $book['title']], $book);
        }

        // 4. Seed Default Courses
        $courses = [
            [
                'title' => 'AI Mastery Blueprint',
                'tagline' => '15+ AI Tools for Business, Workflow Automation & Sales',
                'description' => 'Comprehensive masterclass designed for non-technical leaders and entrepreneurs to dominate their market with artificial intelligence.',
                'badge' => '★ Most Popular',
                'price' => '$99 / ৳9,990',
                'original_price' => '$299',
                'duration' => 'Lifetime Access',
                'modules_count' => '18 High-Def Modules',
                'key_takeaways' => [
                    'Master ChatGPT, Midjourney, Claude & Automation Agents',
                    'High-converting marketing prompt libraries',
                    'Zero coding required — step-by-step video tutorials',
                    'Certificate of Completion + VIP Community Access',
                ],
                'enroll_link' => 'https://osmangani.com',
                'is_popular' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Online Business Mastery',
                'tagline' => 'Scale Your Audience & 10x Inbound Organic Sales',
                'description' => 'A structured sprint to establish a profitable personal brand, build loyal audiences, and close high-ticket offers.',
                'badge' => 'High Impact',
                'price' => '$79 / ৳7,990',
                'original_price' => '$199',
                'duration' => '23 Days Sprint',
                'modules_count' => '12 Modules + Worksheets',
                'key_takeaways' => [
                    'Viral content & video reel architecture',
                    'High-ticket closing conversations and objection handling',
                    'Weekly live Q&A sessions with Osman Gani',
                    'Actionable daily execution assignments',
                ],
                'enroll_link' => 'https://osmangani.com',
                'is_popular' => false,
                'sort_order' => 2,
            ],
            [
                'title' => 'Peak Performance & Time Mastery',
                'tagline' => 'Double Your Productive Output Without Burnout',
                'description' => 'Cognitive performance systems used by elite CEOs to eliminate fatigue, structure high-energy days, and lead decisively.',
                'badge' => 'Executive',
                'price' => '$49 / ৳4,990',
                'original_price' => '$149',
                'duration' => 'Self-Paced',
                'modules_count' => '10 Modules',
                'key_takeaways' => [
                    'The 90-90-1 Focus Protocol blueprint',
                    'Energy management and cognitive recovery drills',
                    'Eliminate procrastination and analysis paralysis',
                    'Downloadable daily planner templates',
                ],
                'enroll_link' => 'https://osmangani.com',
                'is_popular' => false,
                'sort_order' => 3,
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['title' => $course['title']], $course);
        }

        // 5. Seed Default Events
        $events = [
            [
                'title' => 'TRAIN THE TRAINER BOOTCAMP 2026',
                'subtitle' => '3-Day Immersive Certification For Speakers & Corporate Trainers',
                'date_string' => 'November 14-16, 2026',
                'location' => 'Radisson Blu Water Garden, Dhaka & Global Live Stream',
                'event_type' => 'Certification Bootcamp',
                'pricing' => 'VIP: ৳25,000 | Online: ৳9,900',
                'description' => 'Master stage command, audience emotional engagement, signature story development, and high-ticket consulting offer closing.',
                'registration_link' => 'https://osmangani.com',
                'is_upcoming' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'UNLEASH THE CHAMPION IN YOU',
                'subtitle' => 'Mega Public Leadership & Breakthrough Keynote Event',
                'date_string' => 'December 05, 2026',
                'location' => 'Bangabandhu International Conference Center (BICC), Dhaka',
                'event_type' => 'Mega Arena Keynote',
                'pricing' => 'General: ৳2,500 | VIP: ৳5,000',
                'description' => 'A high-octane 1-day transformational experience with over 3,000+ ambitious entrepreneurs and industry leaders.',
                'registration_link' => 'https://osmangani.com',
                'is_upcoming' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'PUBLIC SPEAKING & STAGE INFLUENCE',
                'subtitle' => 'Exclusive 2-Day Executive Mastermind',
                'date_string' => 'January 22-23, 2027',
                'location' => 'The Westin Dhaka (Limited to 40 Leaders)',
                'event_type' => 'Executive Mastermind',
                'pricing' => 'Application Only',
                'description' => 'Intimate executive mentorship focusing on impromptu speaking, TED-style speech delivery, and media interview mastery.',
                'registration_link' => 'https://osmangani.com',
                'is_upcoming' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(['title' => $event['title']], $event);
        }

        // 6. Seed Default Articles
        $articles = [
            [
                'title' => 'Why 95% of Goal Setting Fails & The Architecture That Actually Works',
                'slug' => 'why-95-percent-of-goal-setting-fails',
                'category' => 'Mindset',
                'excerpt' => 'Most people set goals based on excitement rather than structural systems. Discover how to create unbreakable commitment mechanisms.',
                'content' => 'Setting goals is the easy part. Building structural routines, cognitive focus blocks, and daily accountability feedback loops is where true mastery occurs...',
                'author' => 'Osman Gani',
                'read_time' => '6 min read',
                'is_featured' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'The High-Ticket Closing Conversation: 4 Questions That Disarm Objections',
                'slug' => 'high-ticket-closing-conversation',
                'category' => 'Sales',
                'excerpt' => 'Instead of pitching relentlessly, guide prospective clients through value discovery. Master consultative closing.',
                'content' => 'High-ticket sales is not about aggressive convincing. It is about diagnositic listening, framing authority, and helping prospects articulate their own transformation...',
                'author' => 'Osman Gani',
                'read_time' => '8 min read',
                'is_featured' => true,
                'published_at' => now()->subDays(12),
            ],
            [
                'title' => 'The 90-90-1 Focus Protocol For Massive Business Output',
                'slug' => '90-90-1-focus-protocol',
                'category' => 'Productivity',
                'excerpt' => 'Dedicate the first 90 minutes of your workday for the next 90 days to your single highest commercial opportunity.',
                'content' => 'If you protect the prime hours of your morning from reactive communication, notifications, and meetings, your creative output will multiply ten-fold...',
                'author' => 'Osman Gani',
                'read_time' => '5 min read',
                'is_featured' => false,
                'published_at' => now()->subDays(20),
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(['slug' => $article['slug']], $article);
        }
    }
}
