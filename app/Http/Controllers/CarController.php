<?php

namespace App\Http\Controllers;

use App\Additions\FuelType;
use App\Service\FuelConsumption;

class CarController extends Controller
{
    public function calc(FuelConsumption $fuelConsumption, FuelType $fuelType)
    {
        $fuelType = $fuelType->premium();
        dd($fuelConsumption->refueling(50));
    }
}
