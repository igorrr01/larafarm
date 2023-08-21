<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helper extends Controller
{
    public static function intToMounthName($int)
    {
        $arr = [
            'Січня',
            'Лютого',
            'Березня',
            'Квітня',
            'Травня',
            'Червня',
            'Липня',
            'Серпня',
            'Вересня',
            'Жовтня',
            'Листопада',
            'Грудня'
          ];

        return $arr[$int];
    }
}
