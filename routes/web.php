<?php



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
Route::get("/insertTeacher", "App\Http\Controllers\Controller@insertNewTeacher");
Route::get("/insertStudent", "App\Http\Controllers\Controller@insertNewStudent");
Route::get("/getStudent", "App\Http\Controllers\Controller@getStudent");
Route::get("/getStudentList", "App\Http\Controllers\Controller@showStudentList");
Route::get("/updateTeacherName", "App\Http\Controllers\Controller@updateTeacherName");

Route::post("/insertTeacher", "App\Http\Controllers\Controller@insertNewTeacherPost");
Route::get('/register', 'App\Http\Controllers\RegisterationController@showRegisterPage');

Route::post('/register', 'App\Http\Controllers\RegisterationController@createUser');

Route::get('/login', 'App\Http\Controllers\SessionsController@showLoginPage');
Route::post('/user/login','App\Http\Controllers\SessionsController@login');

Route::get('/dashboard','App\Http\Controllers\Controller@showDashboardPage');
