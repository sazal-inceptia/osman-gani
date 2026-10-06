<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of articles.
     */
    public function index(): View
    {
        $articles = Article::latest('published_at')->orderBy('id', 'desc')->get();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     */
    public function create(): View
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created article.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:articles,slug'],
            'category' => ['required', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'is_featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
        ]);

        $validated['slug'] = ! empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']).'-'.time();
        $validated['author'] = $validated['author'] ?? 'Osman Gani';
        $validated['read_time'] = $validated['read_time'] ?? '5 min read';
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['published_at'] = $validated['published_at'] ?? now();

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Show the form for editing the specified article.
     */
    public function edit(Article $article): View
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified article.
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:articles,slug,'.$article->id],
            'category' => ['required', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'is_featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
        ]);

        $validated['slug'] = ! empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        $validated['author'] = $validated['author'] ?? 'Osman Gani';
        $validated['read_time'] = $validated['read_time'] ?? '5 min read';
        $validated['is_featured'] = $request->boolean('is_featured');

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified article.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article removed successfully.');
    }
}
