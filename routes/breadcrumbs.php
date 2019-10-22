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
 * Breadcrumbs Master - Ingrendient
 */
Breadcrumbs::for('backend.master.ingrendient.index', function ($trail) {
    $trail->push('List Ingrendient', route('backend.master.ingrendient.index'));
});
Breadcrumbs::for('backend.master.ingrendient.create', function ($trail) {
    $trail->parent('backend.master.ingrendient.index');
    $trail->push('Create Ingrendient', route('backend.master.ingrendient.create'));
});
Breadcrumbs::for('backend.master.ingrendient.edit', function ($trail, $ingrendient) {
    $trail->parent('backend.master.ingrendient.index');
    $trail->push('Edit Ingrendient', route('backend.master.ingrendient.edit', $ingrendient));
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
