<?php
namespace App\Additions;
use App\Service\FuelConsumption;
use App\Service\FuelControl;

class FuelType
{
    private $fuelConsumption;

    /**
     * FuelType constructor.
     * @param FuelControl $fuelControl
     */
    public function __construct(FuelControl $fuelControl)
    {
        $this->fuelConsumption = $fuelControl;
    }

    public function premium()
    {
        $this->fuelConsumption->premiumGasoline(50);
    }
}
