<?php

$good_login = "ivan";
$good_password = 123;

$login = "andrey";
$pass = 123;

if($good_login == $login OR $good_password == $pass)
{
    echo "Добро пожаловать";
}
else
{
    echo "Ошибка авторизации";
}