<form method="post">
    Ваше имя
    <input type="text" name="myname">
    <input type="submit" value="Поехали">
</form>
<?php
echo  "Привет ".$_POST["myname"];
