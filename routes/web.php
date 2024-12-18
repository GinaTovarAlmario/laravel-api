<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Guest\LeadController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// ROTTE ADMIN
Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    Route::delete("/projects/{project}", [AdminProjectController::class, "destroy"])->name("projects.delete");
    Route::put("/projects/{project}", [AdminProjectController::class, "update"])->name("projects.update");
    Route::get('/projects/{project}', [AdminProjectController::class, 'show'])->name('projects.show');
    Route::get("/projects/{project}/edit", [AdminProjectController::class, "edit"])->name("projects.edit");
});
// ROTTE GUEST
Route::name('guest.')->group(function(){
    Route::get('/', [GuestProjectController::class,'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/projects', GuestProjectController::class)->only(['index','show']);

    Route::get('/contact-us',[LeadController::class,'create'])->name('leads.create');
    Route::post('/contact-us',[LeadController::class,'store'])->name('leads.store');


});
