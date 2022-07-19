<?php

use App\Http\Controllers\DMSController;
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
Auth::routes();
Route::get('/oracle', function(){
    $v = \Illuminate\Support\Facades\DB::raw(\Illuminate\Support\Facades\DB::select("select * from security.users where MRNO like '%0000085'"));
    print_r($v);

});


Route::get('/', [DMSController::class,'documentView']);
Route::get('login',[DMSController::class,'login']);
Route::get('section-list',[DMSController::class,'sectionList']);
Route::get('add-section',[DMSController::class,'createSection'])->name('createSection');
Route::post('add-section',[DMSController::class,'insertSection']);
Route::get('edit-section/{id}',[DMSController::class,'editSection']);
Route::patch('edit-section/{id}',[DMSController::class,'updateSection']);
Route::get('document-list',[DMSController::class,'documentList']);
Route::get('add-document',[DMSController::class,'createDocument']);
Route::post('add-document',[DMSController::class,'insertDocument']);
Route::get('document-view',[DMSController::class,'documentView']);
Route::get('getDocumentView/{id}',[DMSController::class,'getDocumentView']);
Route::get('logout',  [\App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::get('/test-sql', [\App\Http\Controllers\Controller::class,'testSQL']);
Route::get('/test-oracle', [\App\Http\Controllers\Controller::class,'testOracle']);
//Route::get('/', [\App\Http\Controllers\Controller::class,'index']);
Route::get('/home', [\App\Http\Controllers\Controller::class,'home']);
Route::get('/calender' , [\App\Http\Controllers\Controller::class,'showCalender'])->name('calender');

Route::group(['prefix' => 'patient-360'] , function() {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'patientsList'])->name('patients');
    Route::get('/patient', [\App\Http\Controllers\Controller::class, 'newPatient'])->name('new-patient');
    Route::get('/cardiac-History', [\App\Http\Controllers\Controller::class, 'cardiacHistory'])->name('cardiac-History');
    Route::get('/cath-echo-data', [\App\Http\Controllers\Controller::class, 'cathEchoData'])->name('cath-echo-data');
});

Route::group(['prefix' => 'anesthesia'] , function() {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'preOpAnesthesia'])->name('pre-op-anesthesia');


});

Route::group(['prefix' => 'operation'] , function() {
    Route::get('/remarks', [\App\Http\Controllers\Controller::class, 'operationRemarks'])->name('operation-remarks');
    Route::get('/outcome', [\App\Http\Controllers\Controller::class, 'operationOutcome'])->name('operation-outcome');
    Route::get('/discharge', [\App\Http\Controllers\Controller::class, 'dischargeSummary'])->name('discharge-summary');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
