<?php

namespace App\Http\Controllers;

use App\Additions\FuelType;
use App\Service\FuelConsumption;
use App\Service\FuelControl;

class CarController extends Controller
{
    public function calc(FuelControl $fuelControl, FuelType $fuelType)
    {
        $fuelType = $fuelType->premium();
        dd($fuelControl->refueling(50));
    }
}
