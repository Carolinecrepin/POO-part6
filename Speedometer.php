<?php
class Speedometer
{  
    public const CONVERSION = 1.60934;            //Constante static de convertion 

    //méthodes 

    public static function convertKmToMiles($number)
    {   
        return round($number * self::CONVERSION, 2);
    }
    public static function convertMilesToKm($number)
    {
        return round($number * self::CONVERSION, 2);
    }
}
