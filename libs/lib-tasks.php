<?php

// if(!defined('BASE_PATH')){
//     echo "na";
//     die();
// }

defined('BASE_PATH') OR die("Your Prmissen is Dnay");

// return $defined;
// echo "Your prmissen is Ok";

function getCurrentUserId() {
    /// login user id
    return 1;
}


function DeleteFolder($folder_id){
    global $pdo;
    $sql="DELETE  FROM folders WHERE id = $folder_id";
   $stmt = $pdo->query($sql);
   $stmt->execute();
   return $stmt->rowCount();
}

function addFolder($folder_name){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql="INSERT INTO folders (name,user_id) VALUES (:folder_name,:user_id);";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([':folder_name'=>$folder_name,':user_id'=>$current_user_id]);
   $stmt->rowCount();

}

function getFolder()  {
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql="SELECT * FROM folders WHERE user_id = $current_user_id";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $record = $stmt->fetchAll(PDO::FETCH_OBJ);
   return $record;

}


function DeleteTask($task_id){
   global $pdo;
   $sql="DELETE  FROM tasks WHERE id = $task_id";
   $stmt = $pdo->query($sql);
   $stmt->execute();
   return $stmt->rowCount();
}


function getTask()  {
    global $pdo;
    
     $folder = $_GET['folder_id'] ?? null ;
     $folderCondition = '';
     if(isset($folder)and is_numeric($folder)){
        $folderCondition = "and folder_id=$folder";
     }
    

    $current_user_id = getCurrentUserId();
    $sql="SELECT * FROM tasks WHERE user_id = $current_user_id $folderCondition";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $record = $stmt->fetchAll(PDO::FETCH_OBJ);
   return $record;
}


// function addTask($task_name){
//     global $pdo;
//     $current_user_id = getCurrentUserId();
//     $sql="INSERT INTO tasks (title,user_id) VALUES (:title,:user_id);";
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([':title_name'=>$task_name,':user_id'=>$current_user_id]);
//    $stmt->rowCount();

// }






?>