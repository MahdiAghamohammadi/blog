<?php
namespace App\Service;


interface FuelControl
{
    public function Refueling($liter);

    public function premiumGasoline($extra);
}
