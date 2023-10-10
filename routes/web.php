<?php

use App\Http\Controllers\ContactController;
use App\Http\Livewire\Admin\Administrators\AdministratorsIndex;
use App\Http\Livewire\Admin\Dangers\DangersIndex;
use App\Http\Livewire\Admin\Evaluators\EvaluatorsIndex;
use App\Http\Livewire\Admin\Intervention\InterventionIndex;
use App\Http\Livewire\Admin\Managers\ManagersIndex;
use App\Http\Livewire\Admin\Parameter\ParameterIndex;
use App\Http\Livewire\Admin\Register\RegisterIndex;
use App\Http\Livewire\Admin\Users\UserIndex;
use App\Http\Livewire\Companies\ShowCompany;
use App\Http\Livewire\Evaluation\CreateEvaluation;
use App\Http\Livewire\Evaluation\ShowEvaluation;
use Illuminate\Support\Facades\Route;


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
Route::get('/show-evaluation/{id}', ShowEvaluation::class)->name('show-evaluation');
Route::get('/create-evaluation/{id}', CreateEvaluation::class)->name('create-evaluation');


// HOME
Route::view('/help', 'help')->name('help');
Route::resource('/contact', ContactController::class)->names('contact');

Route::view('/admin', 'admin')->middleware('can:admin')->name('admin');

// ADMIN
Route::get('/evaluators', EvaluatorsIndex::class)->middleware('can:admin')->name('evaluators');
Route::get('/register', RegisterIndex::class)->middleware('can:admin')->name('register');
Route::get('/administrators', AdministratorsIndex::class)->middleware('can:admin')->name('administrators');
Route::get('/managers', ManagersIndex::class)->middleware('can:admin')->name('managers');
Route::get('/parameter', ParameterIndex::class)->middleware('can:admin')->name('parameter');
Route::get('/dangers', DangersIndex::class)->middleware('can:admin')->name('dangers');
Route::get('/intervention', InterventionIndex::class)->middleware('can:admin')->name('intervention');




