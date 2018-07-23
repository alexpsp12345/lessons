<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if(!$_SESSION['loged'])
{
require_once "login_form.php";
}
else
{
    echo $_SESSION['loged'];
}
?>