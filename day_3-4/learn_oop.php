<?php

class Car
{
    public $model;
    public $year;

    public function drive(): string
    {
        return 'driving';
    }

    public function getFuel(): string
    {
        return 'Fuelling';
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }
}

$mers = new Car();
$mers->model = "Mercedes Benz";
$mers->year = 2010;
echo $mers->model;