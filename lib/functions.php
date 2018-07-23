<?php

// Таблица Пифагора
function pifagor($td,$tr)
{
    for ($j=1;$j<=$tr;$j++)
    {
        echo "<tr>";
        if($j==1)
        {
            for ($i=1; $i<=$td; $i++)
            {
                echo "<td>" . $i . "</td>";
            }
        }
        else
        {
            for ($i=1; $i<=$td; $i++)
            {
                echo "<td>".$i*$j."</td>";
            }
        }
        echo "</tr>";

    }
}

// Сумма чисел

function summa($a,$b)
{
  $summ = $a+$b;
  echo "сумма чисел ".$a." и ".$b." равна ".$summ;
}

//  Кости
function kosti()
{
    $chislo1 = rand(1,6);
    $chislo2 = rand(1,6);
    $sum = $chislo1+$chislo2;

    echo  "<img src=\"img/ris$chislo1.gif\">";
    echo  "<img src=\"img/ris$chislo2.gif\"><br>";

    echo "Вам выпало число ".$sum;
}

// Подключение и работа с базой данных
function db($sql)
{


    if(!$connection_id)
    {
        if($connection_id = mysqli_connect("localhost","alexpsp",12345,"alexpsp"))
        {
            mysqli_query($connection_id,"SET CHARACTER SET utf8");
            //echo "Подключились к БД" ;
        }


    }


    if($sql)
    {
        $result = mysqli_query($connection_id,$sql);
        return $result;
    }


}