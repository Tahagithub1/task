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

function addFolder($date)  {
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql="SELECT * FROM folders WHERE user_id = $current_user_id";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $record = $stmt->fetchAll(PDO::FETCH_OBJ);
   return $record;

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