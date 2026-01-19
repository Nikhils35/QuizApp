<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get("/",[UserController::class,'home']);
// -------------------user--------------------------

Route::get('signup',[UserController::class,'signup']);
Route::get('login',[UserController::class,'login']);
Route::post('usersignup',[UserController::class,'usersignup']);
Route::post('userlogin',[UserController::class,'userlogin']);
Route::get('userlogout',[UserController::class,'userlogout']);
Route::get('allcatagory',[UserController::class,'allcatagory']);
Route::get('cat_quizzes/{id}',[UserController::class,'cat_quizzes']);
Route::get('playquiz/start/{id}/{cat_id}',[UserController::class,'playquiz']);
Route::get('playquiz',[UserController::class,'showmcqs'])->name('show.mcqs');
Route::post('playquiz/next', [UserController::class, 'nextmcq']);
Route::get('finishquiz',[UserController::class,'finishquiz'])->name('finishquiz');
Route::get('my_quizzes',[UserController::class,'my_quizzes']);
Route::get('/search', [UserController::class, 'search'])->name('search');
Route::post('searchquiz', [UserController::class, 'searchquiz']);
Route::get('/continue/{id}', [UserController::class, 'continue']);
Route::get('/clear_my_history', [UserController::class, 'clear_my_history']);

// ---------------------------------------------
// -------------------Admin--------------------------

Route::view('adminlogin','adminlogin');
Route::post('admin',[AdminController::class,'admin']);

Route::view("adminbase",'adminbase');
Route::get("admindash",[AdminController::class,'admindash']);
Route::get("users",[AdminController::class,'users']);
Route::get("deleteuser/{id}",[AdminController::class,'deleteuser']);
Route::get("catagories",[AdminController::class,'catagories']);
Route::get("logout",[AdminController::class,'logout']);
Route::post("addcatagory",[AdminController::class,'addcatagory']);
Route::get("deletecatagory/{id}",[AdminController::class,'deletecatagory']);
Route::get("quiz",[AdminController::class,'quiz']);
Route::post("addquiz",[AdminController::class,'addquiz']);
Route::post("addmcq",[AdminController::class,'addmcq']);
Route::get("leave_quiz",[AdminController::class,'leave_quiz']);
Route::get("showmcqs/{id}",[AdminController::class,'showmcqs']);
Route::get("showback",[AdminController::class,'showback']);
Route::get("showback2",[AdminController::class,'showback2']);
Route::get("deletemcq/{id}",[AdminController::class,'deletemcq']);
Route::get("showMcqDetails/{id}",[AdminController::class,'showMcqDetails']);
Route::get("quizlist",[AdminController::class,'quizlist']);
Route::get("deletequiz/{id}",[AdminController::class,'deletequiz']);