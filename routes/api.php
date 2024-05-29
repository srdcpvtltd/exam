<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\Student\ExamController;
use App\Http\Controllers\API\Student\SubjectController;
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

Route::post('login',[LoginController::class,'login']);

Route::middleware('auth:api')->group(function(){
    Route::post("get-subject",[SubjectController::class,'get_subject']); //Get Subject
    Route::post("get-exam",[ExamController::class,'get_exams']); //Get Exam details
});
