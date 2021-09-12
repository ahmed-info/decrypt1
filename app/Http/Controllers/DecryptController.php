<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//namespace Khanamiryan\QrCodeTests;
//require "C:/laragon/www/decrypttest/vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use Zxing\QrReader;
class DecryptController extends TestCase
{
    static $qrcode = "ahmed.png";
   public function index()
   {
       return view('decrypt');
   }
}
