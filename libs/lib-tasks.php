<?php


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




function getTask()  {
    global $pdo;
    $sql="SELECT * FROM tasks";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $record;
}



?>