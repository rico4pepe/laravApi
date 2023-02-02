<?php

use App\Services\Geolocation\Geolocation;

class Playground
{
    public function __construct(Geolocation $geolocation)
    {
        $result = GeolocationFacade::search('abs');
        dump($result);


    }
}

