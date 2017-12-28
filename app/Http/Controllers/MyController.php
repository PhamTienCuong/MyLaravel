<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MyController extends Controller
{
    public function xinchao()
    {
      echo "Day la controller";
    }

    public function khoahoc($ten)
    {
      echo "In Tham SO ra: ".$ten;
      return redirect()->route('Fukyou');
    }

    public function GetUrl(Request $request)
    {
      return $request->url();
    }

    public function postForm(Request $request)
    {
      echo $request->HoTen;
    }
}
