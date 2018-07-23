<?php
require_once "header.php";
require_once "lib/functions.php";

$salt1  = md5("часы");
$salt2  = md5("идут");

$salt3 = md5("время");
$salt4 = md5("секунда");

$login = md5($_POST['login']);
$pass = md5($_POST['pass']);

$user_login = md5($salt3.$login.$salt4);
$user_pass = md5($salt1.$pass.$salt2);

$result = db("SELECT * FROM users");

while($row = mysqli_fetch_assoc($result))
{
    $users[] = $row;
}


foreach ($users as $v)
{
    if($v['login'] == $user_login AND $v['pass'] == $user_pass)
    {
        $_SESSION['loged'] = $v['name'];

    }
}


if ($_SESSION['loged'])
{
    echo "Добро пожаловать, ".$_SESSION['loged'];
    header('Refresh:2; url=index.php' );
}
