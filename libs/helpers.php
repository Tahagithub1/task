
<?php

defined('BASE_PATH') OR die("Your Prmissen is Dnay");

include "bootstrap/bootstrap-link.php";

function RequestAjaxCheck() {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
      return true;
    }
     diePage("Request is not Ajax OR empty") ;
    
}


function diePage($msg) {

echo "<p class='alert alert-danger' >$msg</p>";
die();

}



function dd($var)  {
  echo "<pre style='color:red'>";
  var_dump($var);
  echo "</pre>";
}










?>
 