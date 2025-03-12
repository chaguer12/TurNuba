<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate(){
        //i need to make the link of salon

        $link = "";
        $qr_code = QrCode::size(300)->generate('hello, salon!');
        return view('qrcode', compact('qr_code'));
    }
    
}
