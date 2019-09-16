<?php
/**
 * Created by PhpStorm.
 * User: Masiur
 * Date: 11/8/17
 * Time: 6:18 PM
 */
// first argument must be route name
#Dashboard
Breadcrumbs::register('dashboard.main', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('dashboard.main'));
});
#Dashboard / My Profile
Breadcrumbs::register('profile', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.main');
    $breadcrumbs->push('My Profile', route('profile'));
});
#Dashboard / My Profile / Change Avatar
Breadcrumbs::register('profile.pic.change', function ($breadcrumbs) {
    $breadcrumbs->parent('profile');
    $breadcrumbs->push('Change Avatar', route('profile.pic.change'));
});
#Dashboard / My Profile / Change Password
Breadcrumbs::register('profile.password.reset', function ($breadcrumbs) {
    $breadcrumbs->parent('profile');
    $breadcrumbs->push('Change Password', route('profile.password.reset'));
});

// Custom Starts From Here **************************************************************
#Dashboard / Batch / Add New Batch
Breadcrumbs::register('batch.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.main');
    $breadcrumbs->push('Current Batches', route('batch.index'));
});
#Dashboard / Batch / Add New Batch
Breadcrumbs::register('batch.create', function ($breadcrumbs) {
    $breadcrumbs->parent('batch.index');
    $breadcrumbs->push('Add New Batch', route('batch.create'));
});
#Dashboard / Batch / Allocate Batch Member
Breadcrumbs::register('batch.allocate', function ($breadcrumbs) {
    $breadcrumbs->parent('batch.index');
    $breadcrumbs->push('Allocate Batch Member', route('batch.allocate'));
});