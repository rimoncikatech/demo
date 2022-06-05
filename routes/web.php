<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

//welcomepage
Route::get('/',[WelcomeController::class,'home'])->name('/');

//academic
Route::get('/about-us',[AcademicController::class,'aboutus'])->name('about-us');
Route::get('/dean_head_and_co_ordinator',[AcademicController::class,'dean_head_and_co_ordinator'])->name('dean_head_and_co_ordinator');
Route::get('/faculty-members',[AcademicController::class,'faculty_members'])->name('faculty-members');
Route::get('/degrees-offered',[AcademicController::class,'degrees_offered'])->name('degrees-offered');
Route::get('/short-courses',[AcademicController::class,'short_courses'])->name('short-courses');
Route::get('/examinations',[AcademicController::class,'examinations'])->name('examinations');
Route::get('/publications',[AcademicController::class,'publications'])->name('publications');
Route::get('/academic_calender',[AcademicController::class,'academic_calender'])->name('academic_calender');
Route::get('/vc',[AcademicController::class,'vc'])->name('vc');
Route::get('/provc',[AcademicController::class,'provc'])->name('provc');
Route::get('/treasurer',[AcademicController::class,'treasurer'])->name('treasurer');
Route::get('/proctor',[AcademicController::class,'proctor'])->name('proctor');
Route::get('/controller',[AcademicController::class,'controller'])->name('controller');
Route::get('/cco',[AcademicController::class,'cco'])->name('cco');
Route::get('/branding',[AcademicController::class,'branding'])->name('branding');
Route::get('/admin',[AcademicController::class,'admin'])->name('admin');
Route::get('/pro',[AcademicController::class,'pro'])->name('pro');
Route::get('/IT',[AcademicController::class,'IT'])->name('IT');

Route::get('/finance',[AcademicController::class,'finance'])->name('finance');


Route::get('/Administration_Registrar',[AcademicController::class,'Administration_Registrar'])->name('Administration_Registrar');

Route::get('/career-counselling-student-advisor',[AcademicController::class,'careercounselling'])->name('career-counselling-student-advisor');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
