<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('slider', 'SliderCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('testimonial', 'TestimonialCrudController');
    Route::crud('course-stub', 'CourseStubCrudController');
    Route::crud('gallary', 'GallaryCrudController');
    Route::crud('video', 'VideoCrudController');
    Route::crud('tryout', 'TryoutCrudController');
    Route::crud('meditation-video', 'MeditationVideoCrudController');
    Route::crud('sleep', 'SleepCrudController');
    Route::crud('sleep-type', 'SleepTypeCrudController');
    Route::crud('satori', 'SatoriCrudController');
    Route::crud('meditation-type', 'MeditationTypeCrudController');
    Route::crud('meditation', 'MeditationCrudController');
    Route::crud('satori-video', 'SatoriVideoCrudController');
    Route::crud('order', 'OrderCrudController');
}); // this should be the absolute last line of this file