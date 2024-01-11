<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Livewire\CategoryGalleryComponent;
use App\Livewire\DistributeurComponent;
use App\Livewire\EventComponent;
use App\Livewire\FormationComponent;
use App\Livewire\GalleryComponent;
use App\Livewire\NotificationSweetAlert;
use App\Livewire\StagesComponent;
use App\Livewire\SubscriberComponent;
use App\Livewire\TeamComponent;
use App\Livewire\UserComponent;
use App\Livewire\VideosComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/{any}', function () {
//     return view('site');
// })->where('any', '.*');

Route::get('/home', [AuthController::class, 'home']);
Route::get('/', function () {
    return view('site');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/what-we-do', function () {
    return view('whatWeDo');
});
Route::get('/livres', function () {
    return view('livres');
});
Route::get('/prix-excellence', function () {
    return view('prixExcellence');
});
Route::get('/about/team', function () {
    return view('team');
});
Route::get('/partners', function () {
    return view('partners');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/logo', function () {
    return view('logo');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'logUser']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/add-user', [AuthController::class, 'addUser'])->middleware('auth');

Route::delete('/delete-category/{id}', [AdminController::class, 'destroy'])->name('delete-category')->middleware('auth');
Route::post('/store-category', [AdminController::class, 'storeCategory'])->middleware('auth');
Route::get('/admin/categories-livres', [AdminController::class, 'categoryLivre'])->middleware('auth');

Route::get('/admin/livres', [AdminController::class, 'livres'])->middleware('auth');
Route::post('/admin/store-livre', [BookController::class, 'storeLivre'])->middleware('auth');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin/user', [AdminController::class, 'users'])->middleware('auth');
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password')->middleware('auth');

Route::get('/admin/equipe', TeamComponent::class)->middleware('auth');
Route::get('/admin/users', UserComponent::class)->middleware('auth');
Route::get('/admin/formation', FormationComponent::class)->middleware('auth');
Route::get('/admin/subscribers', SubscriberComponent::class)->middleware('auth');
Route::get('/admin/evenements', EventComponent::class)->middleware('auth');
Route::get('/admin/galerie-categories', CategoryGalleryComponent::class)->middleware('auth');
Route::get('/admin/galeries', GalleryComponent::class)->middleware('auth');
Route::get('/admin/videos', VideosComponent::class)->middleware('auth');
Route::get('/admin/stages', StagesComponent::class)->middleware('auth');
Route::get('/admin/distributeurs', DistributeurComponent::class)->middleware('auth');
Route::get('notification-sweetalert', NotificationSweetAlert::class);

Route::fallback(function () {
    return view('site');
});