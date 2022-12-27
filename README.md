## Installation

Install the library via Composer
```bash
composer require yrehan32/php-haversine
```

After installing the library, you can use it in your code like this:
```php
use Yrehan32\PhpHaversine\Haversine;

/*
 * Calculate the distance between two points
 * @param float   $latitudeFrom   Latitude of the first point
 * @param float   $longitudeFrom  Longitude of the first point
 * @param float   $latitudeTo     Latitude of the second point
 * @param float   $longitudeTo    Longitude of the second point
 * @param string  $separators     Number of digits after the comma (default: 2)
 * 
 * @return float Distance between the two points
 */
$distance = Haversine::calculate(
    52.2296756,
    21.0122287,
    52.406374,
    16.9251681
);
echo $distance; // It will print 278.46
```

## License
This library is licensed under the LGPL-2.1 License.