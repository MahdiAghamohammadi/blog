<?php

namespace App\Service;

class FuelConsumption
{
    private $model;
    private $extra = 0;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function refueling($liter): array
    {
        return [
            'distance' => $liter * 10 + $this->extra,
            'model' => $this->model,
            'extra' => $this->extra,
        ];
    }

    public function premiumGasoline($extra)
    {
        $this->extra = $extra;
    }
}
