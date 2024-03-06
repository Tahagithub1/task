<?php

include "bootstrap/init.php";

if(isset($_GET['delete_folder'])&& is_numeric($_GET['delete_folder'])){
    $deletecount =  DeleteFolder($_GET['delete_folder']);
    echo $deletecountl;
}

if(isset($_GET['delete_task'])&& is_numeric($_GET['delete_task'])){
    $deletecount =  DeleteTask($_GET['delete_task']);
    echo $deletecountl;
}



$folders = getFolder();
$tasks = getTask();
///dd($tasks);

//var_dump($tasks);
//var_dump($folders);






include "tpl/tpl-index.php";




?>