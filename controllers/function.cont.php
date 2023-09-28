<?php 
//Functie pagina, hier worden de functies beheerd.

function editValue($pdo, $var){
    $var = htmlentities($var);
    $var = stripslashes($var);
  
    $result = $pdo->quote($var);         
    return str_replace("'", "", $result); 
}


function get_post($pdo, $var){
    return str_replace("'", "", $var);
    return $pdo->quote($_POST[$var]);
}
