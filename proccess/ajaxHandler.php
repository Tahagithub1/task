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
    echo "The name of the directory must be more than 3";
     die();
   
  }else{
    echo "folder sub";   ///Error
  }
  echo addFolder($_POST['folderName']);
  
         break;
         case "addTask":
       var_dump($_POST);
          $folderId = $_POST['folderId'];
          $taskTitle = $_POST['taskTitle'];
          
          if(!isset($folderId) || empty($folderId)){
            echo "pleease select a directory";
             die();
          }
          if(!isset($taskTitle) || strlen($taskTitle) < 2 ){
            echo "The name of the task must be more than 2";
             die();
          }
          

         
          echo addTask($taskTitle,$folderId);
            break;

        default:
        diePage("Invalid Action");
}



?>