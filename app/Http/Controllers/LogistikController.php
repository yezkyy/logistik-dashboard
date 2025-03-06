<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class LogistikController extends Controller
{
    public function scan(Request $request)
    {
        $qrData = $request->input('qr_data'); // Data yang didapat dari QR scan
        // Lakukan logika berdasarkan data QR
        return redirect()->route('logistik.dashboard', ['qr' => $qrData]);
    }
}
