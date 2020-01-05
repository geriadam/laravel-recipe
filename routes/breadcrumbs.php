<?php

/**
 * --------------------------------------------------------------------------
 *  Breadcrumbs Beranda All in One
 * --------------------------------------------------------------------------
 *
 * Breadcrumbs Beranda - Profil
 */
Breadcrumbs::for('backend.beranda.index', function ($trail) {
    $trail->push('Home', route('backend.beranda.index'));
});

/**
 * --------------------------------------------------------------------------
 *  Breadcrumbs Master
 * --------------------------------------------------------------------------
 **/

/**
 * Breadcrumbs Master - Category
 */
Breadcrumbs::for('backend.master.category.index', function ($trail) {
    $trail->push('List Category', route('backend.master.category.index'));
});
Breadcrumbs::for('backend.master.category.create', function ($trail) {
    $trail->parent('backend.master.category.index');
    $trail->push('Create Category', route('backend.master.category.create'));
});
Breadcrumbs::for('backend.master.category.edit', function ($trail, $category) {
    $trail->parent('backend.master.category.index');
    $trail->push('Edit Category', route('backend.master.category.edit', $category));
});

/**
 * Breadcrumbs Master - Recipe
 */
Breadcrumbs::for('backend.master.recipe.index', function ($trail) {
    $trail->push('List Recipe', route('backend.master.recipe.index'));
});
Breadcrumbs::for('backend.master.recipe.create', function ($trail) {
    $trail->parent('backend.master.recipe.index');
    $trail->push('Create Recipe', route('backend.master.recipe.create'));
});
Breadcrumbs::for('backend.master.recipe.edit', function ($trail, $recipe) {
    $trail->parent('backend.master.recipe.index');
    $trail->push('Edit Recipe', route('backend.master.recipe.edit', $recipe));
});

/**
 * Breadcrumbs Master - Newsletter
 */
Breadcrumbs::for('backend.master.newsletter.index', function ($trail) {
    $trail->push('List Newsletter', route('backend.master.newsletter.index'));
});
Breadcrumbs::for('backend.master.newsletter.create', function ($trail) {
    $trail->parent('backend.master.newsletter.index');
    $trail->push('Create Newsletter', route('backend.master.newsletter.create'));
});
Breadcrumbs::for('backend.master.newsletter.edit', function ($trail, $newsletter) {
    $trail->parent('backend.master.newsletter.index');
    $trail->push('Edit Newsletter', route('backend.master.newsletter.edit', $newsletter));
});

/**
 * Breadcrumbs Master - Post
 */
Breadcrumbs::for('backend.master.post.index', function ($trail) {
    $trail->push('List Post', route('backend.master.post.index'));
});
Breadcrumbs::for('backend.master.post.create', function ($trail) {
    $trail->parent('backend.master.post.index');
    $trail->push('Create Post', route('backend.master.post.create'));
});
Breadcrumbs::for('backend.master.post.edit', function ($trail, $post) {
    $trail->parent('backend.master.post.index');
    $trail->push('Edit Post', route('backend.master.post.edit', $post));
});

/**
 * Breadcrumbs Master - Page
 */
Breadcrumbs::for('backend.master.page.index', function ($trail) {
    $trail->push('List Page', route('backend.master.page.index'));
});
Breadcrumbs::for('backend.master.page.create', function ($trail) {
    $trail->parent('backend.master.page.index');
    $trail->push('Create Page', route('backend.master.page.create'));
});
Breadcrumbs::for('backend.master.page.edit', function ($trail, $page) {
    $trail->parent('backend.master.page.index');
    $trail->push('Edit Page', route('backend.master.page.edit', $page));
});

/**
 * Breadcrumbs Master - Setting
 */
Breadcrumbs::for('backend.master.setting.index', function ($trail) {
    $trail->push('Setting', route('backend.master.setting.index'));
});
