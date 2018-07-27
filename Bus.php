<?php

class Bus extends Auto
{
    public static $name = "Автобус";
    public static $col;
    public $seats;

    public function __construct($d, $m, $c, $s,$st)
    {
        $this->seats = $st;
        parent::__construct($d, $m, $c, $s);


    }
    public function aboutcar()
    {
        parent::aboutcar();
        echo "Колиечство Мест ".$this->seats;
        echo "<br>";
    }
}
