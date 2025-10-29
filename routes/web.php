<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//JOBS / GET ALL
Route::get(' /jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index',
        ['jobs' => $jobs]);
});

///JOBS / SCREEN CREATE JOB
Route::get('/jobs/create', function () {
    return view('jobs/create');
});

//JOBS / GET BY ID
Route::get('/jobs/{id}', function ($id) {
    $selectedJob = Job::findOrFail($id);

    return view('jobs/show', ['job' => $selectedJob]);
});

//JOBS / EDIT SCREEN
Route::get('/jobs/{id}/edit', function ($id) {
    $selectedJob = Job::findOrFail($id);

    return view('jobs.edit', ['job' => $selectedJob]);
});

//JOBS / EDIT
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);


    return redirect("/jobs/$job->id");
});

//JOBS / DELETE
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);

    $job->delete();

    return redirect('/jobs');
});


///JOBS / CREATE
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request()->title,
        'salary' => request()->salary,
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// CONTACTS
Route::get('/contact', function () {
    return view('contact');
});
