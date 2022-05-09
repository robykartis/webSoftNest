<?php

// Dashboard

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('dashboard_index', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Dashboard > Posts
Breadcrumbs::for('posts_index', function ($trail) {
    $trail->push('Postingan', route('posts.index'));
});
// Dasboard > Post > Create
Breadcrumbs::for('posts_create', function ($trail) {
    $trail->parent('posts_index');
    $trail->push('Tambah Postingan', route('posts.create'));
});

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });
