<?php
include "constants.php";
include "config.php";
include "vendor/autoload.php";
include "libs/helpers.php";

try{
    $pdo=new PDO("mysql:dbname=$datebase_cinfig->db;host={$datebase_cinfig->host}", $datebase_cinfig->user,$datebase_cinfig->pass);
    // set the pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "config";
} catch(PDOException $e){
          diePage("Connection failed :" . $e->getMessage());
}



include "libs/lib-tasks.php";
include "libs/lib-auth.php";


?>