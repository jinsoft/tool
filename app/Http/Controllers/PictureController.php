<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PictureController extends Controller
{
    //
    public function index()
    {
        return view('picture.qrcode');
    }

    public function color()
    {
        return view('picture.color');
    }

    public function qrcode(Request $request)
    {
        $type = $request->input('type') ?? 'qrcode';
        switch ($type) {
            case 'qrcode':
                $image = $this->qr($request);
                break;
            case 'email':
                $image = $this->qrEmail($request);
                break;
            case 'geo':
                $image = $this->geo($request);
                break;
            case 'phone':
                $image = $this->phoneNumber($request);
                break;
            case 'sms':
                $image = $this->sms($request);
                break;
            case 'vcard':
                $image = $this->vcard($request);
                break;
        }
        return response()->json(['code' => 0, 'src' => $image]);
    }

    private function vcard($request)
    {
        $content = 'BEGIN:VCARD' . "\n";
        $content .= 'VERSION:2.1' . "\n";
        $content .= 'N:啦' . "\n";
        $content .= 'FN:啦啦' . "\n";
        $content .= 'ORG:德玛西亚' . "\n";
        $content .= 'TEL;WORK;VOICE:16666666666' . "\n";
        $content .= 'TEL;HOME;VOICE:16666666666' . "\n";
        $content .= 'TEL;TYPE=cell:16666666666' . "\n";
        $content .= 'ADR;HOME:301;留仙大道;深圳市;000000;中国' . "\n";
        $content .= 'EMAIL:job@ainiok.com' . "\n";
        $content .= 'URL:https://www.ainiok.com' . "\n";
        $content .= 'END:VCARD' . "\n";
        $image = base64_encode(QrCode::format('png')->size(200)->encoding('UTF-8')->generate($content));
        return $image;
    }

    private function sms($request)
    {
        $phone = $request->input('phone') ?? '16666666666';
        $content = $request->input('content') ?? str_repeat('这是测试内容', 3);
        $image = base64_encode(QrCode::format('png')->size(200)->encoding('UTF-8')->SMS($phone, $content));
        return $image;
    }

    private function phoneNumber($request)
    {
        $phone = $request->input('phone') ?? '16666666666';
        $image = base64_encode(QrCode::format('png')->size(200)->encoding('UTF-8')->phoneNumber($phone));
        return $image;
    }

    private function geo($request)
    {
        $longitude = $request->input('longitude') ?? '114.037238';
        $latitude = $request->input('latitude') ?? '22.616716';
        $image = base64_encode(QrCode::format('png')->size(200)->encoding('UTF-8')->geo($longitude, $latitude));
        return $image;
    }

    private function qrEmail($request)
    {
        $url = $request->input('url') ?? 'job@ainiok.com';
        $title = $request->input('title') ?? '测试标题';
        $content = $request->input('content') ?? str_repeat('这是测试内容', 3);
        $image = base64_encode(QrCode::format('png')->size(200)->encoding('UTF-8')->email($url, $title, $content));
        return $image;
    }

    /**
     *  普通二维码
     * @param $request
     */
    private function qr($request)
    {
        $content = $request->input('content') ?? 'https://tool.phper.co';
        $size = $request->input('size') ?? 200;
        $color = $request->input('color') ?? '0,0,0';
        $bgcolor = $request->input('bgcolor') ?? '255,255,255';
        $encode = $request->input('encode') ?? 'UTF-8'; // 这里如果没有验证允许值的话可能会报错
        $correction = $request->input('correction') ?? 'H';
        list($red, $green, $blue) = explode(',', $color);
        list($bgred, $bggreen, $bgblue) = explode(',', $bgcolor);
        return base64_encode(QrCode::format('png')->size($size)->color($red, $green, $blue)->backgroundColor($bgred, $bggreen, $bgblue)
            ->encoding($encode)->errorCorrection($correction)
            ->generate($content));
    }
}
