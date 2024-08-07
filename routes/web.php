<?php

use App\Livewire\Auth\Login;
use App\Livewire\DetailSurvey;
use App\Livewire\Home;
use App\Livewire\Survey;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/survey', Survey::class)->name('survey');
Route::get('/survey/{instrumen}', DetailSurvey::class)->name('survey.detail');
