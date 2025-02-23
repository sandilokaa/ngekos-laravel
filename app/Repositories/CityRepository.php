<?php

namespace App\Repositories;

use App\Models\City;
use App\Interface\CityRepositoryInterface;

class CityRepository implements CityRepositoryInterface 
{
    public function getAllCities()
    {
        return City::all();
    }    
}