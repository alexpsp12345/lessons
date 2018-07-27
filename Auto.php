<?php

class Auto
{
    public static $name = "Автомобиль";
    public $doors;
    public $model;
    public $color;
    public $speed;

    public static $col;


    public function __construct($d,$m,$c,$s)
    {
        static::$col++;
        $this->doors = $d;
        $this->model = $m;
        $this->color = $c;
        $this->speed = $s;

        $this->aboutcar();
        echo "<br>";
    }

    public function aboutcar()
    {
        echo static::$name."<br>";
        echo "марка: ".$this->model."<br>";
        echo "цвет:". $this->color."<br>";
        echo "двери:".$this->doors."<br>";
        echo "скорость:". $this->speed."<br>";
    }

    public function go()
    {
        echo " поехали";
    }


}