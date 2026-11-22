<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Blog;
use App\Models\Home;
use App\Models\Post;
use App\Models\Project;

Route::get('/', function () {
    $gallery = Home::all();

    return view('home', compact('gallery'));
})->name('home');

Route::get('/about', function () {
    $abouts = About::all();

    return view('about', compact('abouts'));
})->name('about');

Route::get('/blog', function () {
    $table_blog = Blog::all();

    return view('blog', compact('table_blog'));
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/projects', function () {
    $projects = Project::all();

    return view('projects', compact('projects'));
})->name('projects');

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::latest()->get(),
    ]);
});