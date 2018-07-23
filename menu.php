<?php
$menus = db("SELECT id, menu_name FROM pages");

while($row = mysqli_fetch_assoc($menus))
{
    $all_menu[] = $row;
}

echo "<ul>";
foreach ($all_menu as $value)
{
    echo "<li><a href=\"?page={$value['id']}\">{$value['menu_name']}</a></li>";
}
echo "</ul>";

if($_SESSION['loged'])
{
    echo "<a href=\"?logout=1\">Выйти</a>";
}




    if ($_GET['logout'])
    {
        unset($_SESSION['loged']);
        header('Refresh:2; url=index.php' );
    }
    ?>