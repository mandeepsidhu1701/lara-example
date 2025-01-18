<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home',[
        'greeting' => 'Hello',
        'name' => 'Mandeep Singh Sidhu'
    ]);
});

Route::view('/','home',[
                        'greeting' => 'Hello',
                        'name' => 'Mandeep Singh Sidhu'
                        ]);
Route::view('/contact','contact');

Route::resource('jobs',JobController::class);

// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs','index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show'); // Route::get('/jobs/{job:job_id}',function (Job $job){});
//     Route::post('/jobs','store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');

// });




