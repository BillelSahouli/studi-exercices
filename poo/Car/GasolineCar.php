<?php
require_once 'Car.php';

class GasolineCar extends Car
{
    public float $cO2Rate;

    public function __construct(float $price, string $brand, float $cO2Rate)
    {
        parent::__construct($price, $brand);
        $this->cO2Rate = $cO2Rate;
    }

    public function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics(); // TODO: Change the autogenerated stub
        $characteristics['cO2Rate'] = $this->cO2Rate;
        return $characteristics;
    }
}