<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {

    return view('home',[
        'greeting' => 'Hello',
        'name' => 'Mandeep Singh Sidhu'
    ]);
});

Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->cursorPaginate(3); //eager loading

    return view('jobs',[
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id)  {

     $job =  Job::find($id);

    return view('job',['job'=>$job]);
});

Route::get('/contact', function () {
    return view('contact');
});
