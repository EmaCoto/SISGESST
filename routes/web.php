<?php

use App\Http\Livewire\Companies\IndexCompany;
use App\Http\Livewire\Companies\ShowCompany;
use App\Http\Livewire\Evaluation\EvaluationParent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FormWizard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');});

Route::get('/show-company/{id}', ShowCompany::class)->name('show-company');
Route::get('/evaluation', EvaluationParent::class)->name('evaluation');

