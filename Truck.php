<?php

class Truck extends Auto
{

    public static $name = "Грузовик";
    public static $col;
    public $cargo;
    public function __construct($d, $m, $c, $s,$cg)
    {
        $this->cargo = $cg;
        parent::__construct($d, $m, $c, $s);

    }

    public function aboutcar()
    {
        parent::aboutcar();
        echo "Грузоподъёмность ".$this->cargo;
        echo "<br>";

    }
}