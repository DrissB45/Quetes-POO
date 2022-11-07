<?php

Class Speedometer {

    public const KM_TO_MILES = 0.62;
    public const MILES_TO_KM = 1.6;

    public static function convertKmToMiles(int $kilometer)
    {
        return $kilometer * self::KM_TO_MILES;
    }

    public static function convertMilesToKm(int $mile)
    {
        return $mile * self::MILES_TO_KM;
    }

}