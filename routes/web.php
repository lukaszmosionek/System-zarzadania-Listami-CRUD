<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\PageController;
use \App\Http\Controllers\Admin\ChecklistGroupController;
use \App\Http\Controllers\Admin\ChecklistController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\Admin\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' =>'auth'], function(){
    Route::get('welcome', [\App\Http\Controllers\PageController::class, 'welcome'])->name('welcome');
    Route::get('podstrona', [\App\Http\Controllers\PageController::class, 'podstrona'])->name('podstrona');

    Route::group(['prefix' =>'admin', 'as' => 'admin.', 'middleware' =>'is_admin'], function(){
        Route::resource('pages', PageController::class)->only(['edit', 'update']);
        Route::resource('checklist_groups', ChecklistGroupController::class);
        Route::resource('checklist_groups.checklists', ChecklistController::class);

        Route::resource('checklists.tasks', TaskController::class);
    });
});
