<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Book;
use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\Event;
use App\Models\SiteSetting;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Display the Admin Dashboard overview.
     */
    public function index(): View
    {
        $stats = [
            'books_count' => Book::count(),
            'courses_count' => Course::count(),
            'events_count' => Event::count(),
            'articles_count' => Article::count(),
            'messages_count' => ContactMessage::count(),
            'unread_messages_count' => ContactMessage::where('is_read', false)->count(),
            'settings_count' => SiteSetting::count(),
        ];

        $recentMessages = ContactMessage::latest()->take(5)->get();
        $recentArticles = Article::latest()->take(4)->get();
        $recentBooks = Book::orderBy('sort_order')->take(4)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages', 'recentArticles', 'recentBooks'));
    }
}
