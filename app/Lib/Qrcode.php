<?php
/**
 * Created by PhpStorm.
 * User: xiaojin
 * Date: 2018/9/25
 * Time: 11:06
 */

namespace App\Lib;

class Qrcode
{
    /**
     * QrCode Generator is setup to return a SVG image by default.
     * @var string
     */
    protected $format = 'png';

    protected $size = 100;

    protected $color='255,0,255';

    protected $backgroundColor = '255,255,0';

    protected $margin = 20;

    protected $errorCorrection = 'H';

    protected $encoding = 'UTF-8';

    protected $logo ='';



}