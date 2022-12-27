<?php

namespace Yrehan32\PhpHaversine;

class Haversine
{
    /**
     * Calculate the distance between two points.
     *
     * @param  float  $latitudeFrom
     * @param  float  $longitudeFrom
     * @param  float  $latitudeTo
     * @param  float  $longitudeTo
     * @param  int    $separators
     *
     * @return float
     */
    public static function calculate(
        float $latitudeFrom  = 0.0,
        float $longitudeFrom = 0.0,
        float $latitudeTo    = 0.0,
        float $longitudeTo   = 0.0,
        int   $separators    = 2
    )
    {
        $earthRadius = 6371; // Earth's radius in kilometers

        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo   = deg2rad($latitudeTo);
        $lonTo   = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(
            sqrt(
                pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)
            )
        );
            
        return (float) number_format(($angle * $earthRadius), $separators);
    }
}