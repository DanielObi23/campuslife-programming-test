<?php

use Illuminate\Support\Facades\Route;
use App\Utility\BrowzerAPI;

Route::get('/', function () {

    $api = new BrowzerAPI();

    $organisation = $api->getOrganisation();

    $organisation = $organisation['data'];

    return view('welcome', compact('organisation'));

})->name('home');


Route::get('/stories', function () {

    $api = new BrowzerAPI();

    $stories = $api->getStories();

    return view('stories.index', compact('stories'));

});

Route::get('/events', function () {

    $api = new BrowzerAPI();

    $events = $api->getEvents();

    return view('events.index', compact('events'));

});