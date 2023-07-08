<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TopicController;
use GuzzleHttp\Client;
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


Route::get('questions', [QuestionController::class, 'index'])->name('questions');
Route::get('topics', [TopicController::class, 'index'])->name('topics');
Route::get('question-create', [QuestionController::class, 'create'])->name('question-create');
Route::post('question-store', [QuestionController::class, 'store'])->name('post_quiz');
Route::get('topics', [TopicController::class, 'index'])->name('topics');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['role:client', 'auth']], function () {
    Route::get('/my-tests', [ClientController::class, 'showTests'])->name('myTests');
    Route::get('/practice-questions', [ClientController::class, 'showQns'])->name('showQns');
    Route::get('store-answers', [ClientController::class, 'storeAnswers'])->name('store-answers');
    Route::get('calculate-score/{attemptId}', [ClientController::class, 'calculateScore'])->name('calculate-score');
    Route::get('/results/{attemptId}', [ClientController::class, 'viewResult'])->name('view-result');
    Route::get('/user-details', [HomeController::class, 'userDetails'])->name('userDetails');
    Route::get('/user-tasks', [HomeController::class, 'userTasks'])->name('userTasks');
    Route::post('/save-user-education', [HomeController::class, 'saveUserEducation'])->name('saveUserEducation');
    Route::post('/save-user-details', [HomeController::class, 'saveBasicUserDetails'])->name('saveBasicUserDetails');
    Route::post('/save-user-tasks', [HomeController::class, 'saveUserPrefferedTasks'])->name('saveUserPrefferedTasks');
    Route::get('/submit-user-details', [HomeController::class, 'submitUserDetails'])->name('submitUserDetails');
    Route::get('/user-education', [HomeController::class, 'userEducationDetails'])->name('userEducationDetails');
});
