<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
      echo $request->Hoten;
      if($request->has('Tuoi'))
        echo "co Tuoi";
      else
        echo "ko co Tuoi";
    }

    public function setCookie()
    {
      $response = new Response();
      $response->withCookie('KhoaHoc',json_encode(['Laravel - Cuong Pham','asdf']), 1);
      return $response;
    }

    public function getCookie(Request $request)
    {
      return $request->cookie('KhoaHoc');
    }
}
