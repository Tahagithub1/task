<?php
include  "constants.php";

include BASE_PATH . "bootstrap/config.php";
include BASE_PATH . "vendor/autoload.php";
include BASE_PATH . "libs/helpers.php";


try{
    $pdo=new PDO("mysql:dbname=$datebase_cinfig->db;host={$datebase_cinfig->host}", $datebase_cinfig->user,$datebase_cinfig->pass);
    // set the pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "config";
} catch(PDOException $e){
          diePage("Connection failed :" . $e->getMessage());
}



include BASE_PATH . "libs/lib-tasks.php";
include BASE_PATH . "libs/lib-auth.php";


?>