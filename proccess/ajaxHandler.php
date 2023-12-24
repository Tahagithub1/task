<?php
include   "../bootstrap/init.php";


if(!RequestAjaxCheck()){

  diePage("Invalid Request");

}

if(!isset($_POST['action']) || empty($_POST['action'])){

    diePage("Invalid Action");
}

switch($_POST['action']){
   
    case "addFolder":
   // var_dump($_POST);
   if(!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3 ){
    echo "name folder 4";
     die();
   
  }else{
    echo "folder sub";   ///Error
  }
  echo addFolder($_POST['folderName']);
  
         break;
         case "addTask":
          var_dump($_POST);
   
          // if(!isset($_POST['folderName']) || strlen($_POST['folderName']) < 1 ){
          //   echo "name folder 4";
          //    die();
           
          // }else{
          //   echo "folder sub";   
          // }

            break;

        default:
        diePage("Invalid Action");
}



?>