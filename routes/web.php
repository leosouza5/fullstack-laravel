<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->paginate(3);
    return view('jobs',
        ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $selectedJob = Job::find($id);
    return view('job', ['job' => $selectedJob]);
});
Route::get('/contact', function () {
    return view('contact');
});
