<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'projects' => config('projects'),
    ]);
})->name('home');

Route::get('/projets/{slug}', function (string $slug) {
    $projects = config('projects');

    abort_unless(array_key_exists($slug, $projects), 404);

    return view('projects.show', [
        'slug' => $slug,
        'project' => $projects[$slug],
        'projects' => $projects,
    ]);
})->name('projects.show');
