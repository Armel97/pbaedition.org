<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DistributeurController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/subscribe', [SubscriberController::class, 'subscribe']);
Route::get('/book-categories', [BookCategoryController::class, 'getCategories']);
Route::get('/get-books', [BookController::class, 'getBooks']);
Route::get('/get-books-by-category/{id}', [BookController::class, 'getBooksByCategory']);
Route::get('/get-books-a-paraitre', [BookController::class, 'getBookAParaitre']);
Route::get('/get-books-livres-hippo', [BookController::class, 'getBookLivresHippo']);
Route::get('/get-books-a-paraitre-for-home', [BookController::class, 'getBookAParaitreForHome']);
Route::get('/get-books-a-paraitre-for-footer', [BookController::class, 'getBookAParaitreForFooter']);
Route::get('/get-books-nouveautes-for-home', [BookController::class, 'getBookNouveauteForHome']);
Route::get('/get-books-livres-for-home', [BookController::class, 'getBookLivresForHome']);
Route::get('/get-team-for-home', [TeamController::class, 'getTeamForHome']);
Route::get('/get-galeries-for-home', [GalleryController::class, 'getGalleriesForHome']);
Route::get('/get-galeries-two-for-home', [GalleryController::class, 'getGalleriesTwoForHome']);
Route::get('/get-galeries-three-for-home', [GalleryController::class, 'getGalleriesThreeForHome']);
Route::get('/get-galeries', [GalleryController::class, 'getGalleries']);
Route::get('/get-videos', [VideoController::class, 'getVideos']);
Route::get('/get-stages', [StageController::class, 'getStages']);
Route::get('/get-distributeurs', [DistributeurController::class, 'getDistributeurs']);
Route::get('/get-events-for-home', [EventController::class, 'getEventForHome']);
Route::get('/get-books-nouveautes', [BookController::class, 'getBookNouveautes']);
Route::get('/get-pba-events', [EventController::class, 'getPbaEvents']);
Route::get('/get-pba-trainings', [FormationController::class, 'getPbaTrainings']);
Route::get('/get-pba-team', [TeamController::class, 'getPbaTeam']);
Route::post('/send-mail', [ContactController::class, 'sendEmail']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::fallback(function () {
    return view('site');
});
