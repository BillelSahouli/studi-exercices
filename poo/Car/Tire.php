<?php


class Tire
{
    public float $width;
    public float $height;
    public float $diameter;

    public function __construct(float $width, float $height, float $diameter)
    {
            $this->width = $width;
            $this->height = $height;
            $this->diameter = $diameter;
    }

}