<?php 
namespace App\Helpers;

use Location;
use Auth;
use App\DeviceInfo;
/*
* class helper for users 
*/ 
class DeviceHelper{


    /*
    * @parm no parameter
    */
    public static function insertUserDeviceInfo(){
        $deviceInfo= New DeviceInfo;
        $data = Location::get($ip);
        $deviceInfo->countryName=$data['countryName'];
        $deviceInfo->countryCode=$data['countryCode'];
        $deviceInfo->regionName=$data['regionName'];
        $deviceInfo->zipCode=$data['zipCode'];
        $deviceInfo->isoCode=$data['isoCode'];
        $deviceInfo->postalCode=$data['postalCode'];
        $deviceInfo->latitude=$data['latitude'];
        $deviceInfo->longitude=$data['longitude'];
        $deviceInfo->metroCode=$data['metroCode'];
        $deviceInfo->areaCode=$data['areaCode'];
        $deviceInfo->user_id=Auth::user()->id;
        $deviceInfo->save();

    }

}