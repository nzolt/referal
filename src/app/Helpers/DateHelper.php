<?php


namespace App\Helpers;

class DateHelper
{
    public static function getMinDate()
    {
        return date('Y-m-d', strtotime(' - 18 year'));
    }

}
