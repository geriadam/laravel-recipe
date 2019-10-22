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
