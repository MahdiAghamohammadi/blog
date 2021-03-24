<?php

namespace App\Http\Controllers;

use App\Service\FuelConsumption;

class CarController extends Controller
{
    // public function calc()
    // {
    //     $fuelConsumption = new FuelConsumption('benz');
    //     // $fuelConsumption = resolve(FuelConsumption::class);
    //     dd($fuelConsumption->refueling(40));
    // }

    public function calc(FuelConsumption $fuelConsumption)
    {
        dd($fuelConsumption->refueling(50));
    }
}
