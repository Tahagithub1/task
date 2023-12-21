<?php

include "bootstrap/init.php";

if(isset($_GET['delete_folder'])&& is_numeric($_GET['delete_folder'])){
    $deletecount =  DeleteFolder($_GET['delete_folder']);
    echo "$deletecountl ss";
}



$folders = getFolder();
$tasks = getTask();
//var_dump($tasks);
//var_dump($folders);






include "tpl/tpl-index.php";




?>