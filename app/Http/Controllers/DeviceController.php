<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Location;

class DeviceController extends Controller
{
    public function index(Request $request){
        // $ip=  request()->ip();
        // $ip=  request()->getClientIp();
        // //  $ip = '51.15.0.148';
        // $data = \Location::get($ip);
        // dd($data);
        echo $request->getClientIp();
        $ip=  \Request::ip();
        $data = Location::get($ip);
        dd($data,$ip);
    }
}
