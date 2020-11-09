<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('test', function ($breadcrumb) {
    $breadcrumb->push('ABC', route('test'));
});


