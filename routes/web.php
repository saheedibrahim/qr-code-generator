<?php

use App\Http\Controllers\QRCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-qr-code', [QRCodeController::class, 'generateQRCode']);
