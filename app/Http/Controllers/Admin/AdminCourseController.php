<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of courses.
     */
    public function index(): View
    {
        $courses = Course::orderBy('sort_order')->orderBy('id', 'desc')->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new course.
     */
    public function create(): View
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created course.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'badge' => ['nullable', 'string', 'max:100'],
            'price' => ['nullable', 'string', 'max:100'],
            'original_price' => ['nullable', 'string', 'max:100'],
            'duration' => ['nullable', 'string', 'max:100'],
            'modules_count' => ['nullable', 'string', 'max:100'],
            'key_takeaways_raw' => ['nullable', 'string'],
            'enroll_link' => ['nullable', 'url', 'max:255'],
            'is_popular' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $takeaways = [];
        if (! empty($validated['key_takeaways_raw'])) {
            $takeaways = array_values(array_filter(array_map('trim', explode("\n", $validated['key_takeaways_raw']))));
        }

        Course::create([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'description' => $validated['description'],
            'badge' => $validated['badge'],
            'price' => $validated['price'],
            'original_price' => $validated['original_price'],
            'duration' => $validated['duration'],
            'modules_count' => $validated['modules_count'],
            'key_takeaways' => $takeaways,
            'enroll_link' => $validated['enroll_link'],
            'is_popular' => $request->boolean('is_popular'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit(Course $course): View
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified course.
     */
    public function update(Request $request, Course $course): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'badge' => ['nullable', 'string', 'max:100'],
            'price' => ['nullable', 'string', 'max:100'],
            'original_price' => ['nullable', 'string', 'max:100'],
            'duration' => ['nullable', 'string', 'max:100'],
            'modules_count' => ['nullable', 'string', 'max:100'],
            'key_takeaways_raw' => ['nullable', 'string'],
            'enroll_link' => ['nullable', 'url', 'max:255'],
            'is_popular' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $takeaways = [];
        if (! empty($validated['key_takeaways_raw'])) {
            $takeaways = array_values(array_filter(array_map('trim', explode("\n", $validated['key_takeaways_raw']))));
        }

        $course->update([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'description' => $validated['description'],
            'badge' => $validated['badge'],
            'price' => $validated['price'],
            'original_price' => $validated['original_price'],
            'duration' => $validated['duration'],
            'modules_count' => $validated['modules_count'],
            'key_takeaways' => $takeaways,
            'enroll_link' => $validated['enroll_link'],
            'is_popular' => $request->boolean('is_popular'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified course.
     */
    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course removed successfully.');
    }
}
