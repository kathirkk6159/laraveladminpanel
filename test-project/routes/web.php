<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserauthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
Route::get("/",[UserauthController::class,'index']);  


Route::get("/login",[UserauthController::class,'loginpage']);
// Route::post("/user",[UserauthController::class,'userlogin']);  

Route::post("/dashboard",[UserauthController::class,'dashboardpage']);
Route::get("/header",[UserauthController::class,'headerside']);

Route::get("bannerview",[UserauthController::class,'bannerview']); 
Route::get("/addbanner",[UserauthController::class,'addnewbanner']);
Route::post("addnewbanner",[UserauthController::class,'addbanner']);
Route::get("bannerdelete/{id}",[UserauthController::class,'bannerdestroy']);
Route::get("editshow/{id}",[UserauthController::class,'editshow']);
Route::post("editshow/{id}",[UserauthController::class,'editshowbanner']);
Route::get("bannerpublish/{id}/{value}",[UserauthController::class,'bannerpublish']);


Route::get("/addmachines",[UserauthController::class,'addmachines']);
Route::post("/addnewmachines",[UserauthController::class,'addnewmachines']);
Route::get("/machines",[UserauthController::class,'machinesview']);
Route::get("machinesdelete/{id}",[UserauthController::class,'machinesdestroy']);
Route::get("editshowmachines/{id}",[UserauthController::class,'editshowmachine']);
Route::post("editshowmachines/{id}",[UserauthController::class,'editshowmachines']);
Route::get("machinespublish/{id}/{value}",[UserauthController::class,'machinespublish']);

Route::get("/addpage",[UserauthController::class,'addpage']);
 Route::post("/addnewpage",[UserauthController::class,'addnewpage']);
 Route::get("/page",[UserauthController::class,'pageview']);
 Route::get("pagedelete/{id}",[UserauthController::class,'pagedestroy']);
Route::get("/editshowpage/{id}",[UserauthController::class,'editpage']);
Route::post("/editshowpage/{id}",[UserauthController::class,'pagesedit']);
Route::get("pagepublish/{id}/{value}",[UserauthController::class,'pagespublish']);


Route::get("/aboutus",[UserauthController::class,'aboutus']);
Route::get("/contactus",[UserauthController::class,'contactus']);
Route::post("/contactus",[UserauthController::class,'contactus']);
Route::get("/contactusdisplay",[UserauthController::class,'contactusdisplay']);


// Route::get("/subscribe",[UserauthController::class,'subscribe']);
Route::post("/subscribe",[UserauthController::class,'subscriber']);
Route::get("/managesubscriber",[UserauthController::class,'managesubscriber']);
Route::get("subscriberdelete/{id}",[UserauthController::class,'subscriberdestroy']);
