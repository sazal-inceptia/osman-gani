<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminBookController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ContactController;
use App\Models\Article;
use App\Models\Book;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $books = Book::orderBy('sort_order')->take(3)->get();
    $courses = Course::orderBy('sort_order')->take(3)->get();
    $events = Event::where('is_upcoming', true)->orderBy('sort_order')->take(3)->get();
    $articles = Article::latest('published_at')->take(3)->get();

    return view('welcome', compact('books', 'courses', 'events', 'articles'));
})->name('home');

Route::get('/osman-gani', function () {
    return view('osman-gani');
})->name('about.osman-gani');

Route::get('/media-events', function () {
    return view('media-events');
})->name('about.media-events');

Route::get('/life-mission', function () {
    return view('life-mission');
})->name('about.life-mission');

Route::get('/books', function () {
    $books = Book::orderBy('sort_order')->get();

    return view('books', compact('books'));
})->name('books');

Route::get('/speaking', function () {
    return view('speaking');
})->name('speaking');

Route::get('/courses', function () {
    $courses = Course::orderBy('sort_order')->get();

    return view('courses', compact('courses'));
})->name('courses');

Route::get('/events', function () {
    $events = Event::orderBy('sort_order')->get();

    return view('events', compact('events'));
})->name('events');

Route::get('/free-videos-library', function () {
    return view('free-videos-library');
})->name('resources.free-videos');

Route::get('/e-books', function () {
    return view('e-books');
})->name('resources.ebooks');

Route::get('/free-tools', function () {
    return view('free-tools');
})->name('resources.tools');

Route::get('/blog', function () {
    $articles = Article::latest('published_at')->get();

    return view('blog', compact('articles'));
})->name('resources.blog');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-usage', function () {
    return view('terms-of-usage');
})->name('terms-of-usage');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Protected Admin Portal Routes
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Books Management
    Route::resource('books', AdminBookController::class);

    // Courses Management
    Route::resource('courses', AdminCourseController::class);

    // Events Management
    Route::resource('events', AdminEventController::class);

    // Articles / Blog Management
    Route::resource('articles', AdminArticleController::class);

    // Inquiries / Messages
    Route::get('/messages', [AdminContactController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [AdminContactController::class, 'show'])->name('messages.show');
    Route::post('/messages/{message}/toggle-read', [AdminContactController::class, 'toggleRead'])->name('messages.toggle-read');
    Route::delete('/messages/{message}', [AdminContactController::class, 'destroy'])->name('messages.destroy');

    // Site Settings
    Route::get('/settings', [AdminSettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [AdminSettingController::class, 'update'])->name('settings.update');
});
