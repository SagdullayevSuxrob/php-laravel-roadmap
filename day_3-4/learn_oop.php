<?php

class Car
{
    public $model;
    public $year;

    public function __construct($model, $year){
        $this->model = $model;
        $this->year = $year;
    }
    public function drive(): string
    {
        return 'driving';
    }

    public function getFuel(): string
    {
        return 'Fuelling';
    }

//    public function setModel($model): void
//    {
//        $this->model = $model;
//    }
}

$mers = new Car('Mercedes Benz', 2022);

$bmw = new Car('BMW', 2025);

$kia = new Car('KIA K5', 2026);

var_dump($mers, $bmw->model, $kia->year);
//$mers->model = "Mercedes Benz";
//$mers->year = 2010;
//echo $mers->model;