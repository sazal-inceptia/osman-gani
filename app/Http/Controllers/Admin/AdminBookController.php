<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminBookController extends Controller
{
    /**
     * Display a listing of books.
     */
    public function index(): View
    {
        $books = Book::orderBy('sort_order')->orderBy('id', 'desc')->get();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create(): View
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created book.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['nullable', 'string', 'max:100'],
            'languages' => ['nullable', 'string', 'max:255'],
            'buy_link' => ['nullable', 'url', 'max:255'],
            'amazon_link' => ['nullable', 'url', 'max:255'],
            'rating' => ['nullable', 'numeric', 'min:1', 'max:5'],
            'reviews_count' => ['nullable', 'integer', 'min:0'],
            'is_bestseller' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $validated['is_bestseller'] = $request->boolean('is_bestseller');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Book::create($validated);

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Book $book): View
    {
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified book.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['nullable', 'string', 'max:100'],
            'languages' => ['nullable', 'string', 'max:255'],
            'buy_link' => ['nullable', 'url', 'max:255'],
            'amazon_link' => ['nullable', 'url', 'max:255'],
            'rating' => ['nullable', 'numeric', 'min:1', 'max:5'],
            'reviews_count' => ['nullable', 'integer', 'min:0'],
            'is_bestseller' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $validated['is_bestseller'] = $request->boolean('is_bestseller');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $book->update($validated);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified book.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book removed successfully.');
    }
}
