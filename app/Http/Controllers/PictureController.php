<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PictureController extends Controller
{
    //
    public function index()
    {
//        $qrcodeName = bcrypt('qrcode');
//        $da = Qrcode::size(100)->format('png')->encoding('UTF-8')->generate('www.baidu.com');
//        echo $da;
//        exit;
//        ob_start();
//        QrCode::format('png')->size(100)->encoding('UTF-8')->generate("1111");
//        $imageString = ob_get_contents();
//        ob_end_clean();
//        echo $imageString;
        return view('picture.qrcode');
    }

    public function qrcode(Request $request)
    {
        return "111";
        $rule = [];
        return QrCode::format('png')->size(100)->encoding('UTF-8')->generate("1111");

    }
}
