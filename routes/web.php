<?php
use Illuminate\Support\Facades\Route;
use Laraphant\Contactform\Http\Controllers\ContactFormController;

Route::middleware(['guest','web'])->group(function(){
    Route::get('/contact',[ContactFormController::class,'Create']);
    Route::post('/submit/message',[ContactFormController::class,'store']);
});
