<?php

use App\Services\Geolocation\Geolocation;
use Illuminate\Support\Facades\Facade;

Class GeolocationFacade extends Facade{
        protected static function getFacadeAccessor(){
        return Geolocation::class;
        }
}
