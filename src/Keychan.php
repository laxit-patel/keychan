<?php

namespace Laxit\Keychan;

use Illuminate\Database\Eloquent\Model;

class Keychan
{
    const days = array("01" => "1","02" => "2","03" => "3","04" => "4","05" => "5","06" => "6","07" => "7","08" => "8","09" => "9","10" => "A","11" => "B","12" => "C","13" => "D","14" => "E","15" => "F","16" => "G","17" => "H","18" => "I","19" => "J","20" => "K","21" => "L","22" => "M","23" => "N","24" => "O","25" => "P","26" => "Q","27" => "R","28" => "S","29" => "T","30" => "U","31" => "V");
    const months = array("01" => "1","02" => "2","03" => "3","04" => "4","05" => "5","06" => "6","07" => "7","08" => "8","09" => "9","10" => "A","11" => "B","12"=>"C");

    public static function date():string
    {
        return date('y').self::months[date('m')].self::days[date('d')];
    }

    public static function forge($model):string
    {
        $model = new $model;

        if($model::all()->count() != 0) {
            $serial = str_pad(intval(substr($model::latest()->pluck($model->keychanColumn)->first(),-4)) + 1, 4, 0, STR_PAD_LEFT);
        } else {
            $serial = "0000";
        }

        return self::date().$serial;
    }
}