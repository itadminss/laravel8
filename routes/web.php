<?php

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

Route::get( "/gallery" , function(){
$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
$bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"; 
$cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
$god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg"; 
$spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg"; 

return view("test/index", compact("ant","bird","cat","god","spider") );
});
Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});

Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

Route::get("/theme" , function (){
	return view("theme");
});


// Route Template Inheritance
Route::get("/teacher/inheritance", function () {
    return view("teacher-inheritance");
});
Route::get("/student/inheritance", function () {
    return view("student-inheritance");
});


Route::get('/tables', function () {
    return view('tables');
});


// Route::get("/display/create", [ DisplayController.class , "create" ]);

use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\Covid19Controller;

Route::get("/myprofile/create",[ MyProfileController::class , "create" ]);
Route::get("/myprofile/{id}/edit", [ MyProfileController::class , "edit" ] );
Route::get("/myprofile/{id}", [ MyProfileController::class , "show" ]);
Route::get( "/coronavirus" ,[ MyProfileController::class , "coronavirus" ] );
// Route::get( "/coronavirus" , "MyProfileController@coronavirus" );

Route::get( "/newgallery" , [ MyProfileController::class , "gallery" ] );
Route::get( "/newgallery/ant" , [ MyProfileController::class , "ant" ] );
Route::get( "/newgallery/bird" , [ MyProfileController::class , "bird" ] );

Route::resource('/covid19', Covid19Controller::class );
// Route::get('/covid19', [ Covid19Controller::class,"index" ]);
// Route::post("/covid19",[ Covid19Controller::class , "store" ]);
// Route::get("/covid19/create",[ Covid19Controller::class , "create" ]);
// Route::get('/covid19/{id}',[ Covid19Controller::class,'show' ]);
// Route::get("/covid19/{id}/edit", [ Covid19Controller::class , "edit" ]);
// Route::patch("/covid19/{id}", [ Covid19Controller::class , "update" ]);
// Route::delete('/covid19/{id}', [ Covid19Controller::class , 'destroy' ]);


//ลองทำ
Route::get('/covid19/show', [ Covid19Controller::class,"show" ]);




