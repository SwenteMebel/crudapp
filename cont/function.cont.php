<?php 

function editValue($pdo, $var){
    $var = htmlentities($var);
    $var = stripslashes($var);
  
    $result = $pdo->quote($var);          // This adds single quotes
    return str_replace("'", "", $result); 
}

