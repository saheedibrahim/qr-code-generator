<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateQRCode()
    {
        $qrCode = QrCode::size(300)
            ->backgroundColor(255, 255, 204)
            ->color(0, 0, 0)
            ->generate('https://saidbyte.com.ng');
        return view('qrcode', compact('qrCode'));
    }
}
