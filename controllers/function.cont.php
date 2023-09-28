<?php 
//Functie pagina, hier worden de functies beheerd.

function editValue($pdo, $var){
    $var = htmlentities($var);
    $var = stripslashes($var);
  
    $result = $pdo->quote($var);         
    return str_replace("'", "", $result); 
}


function get_post($pdo, $str){
    return str_replace("'", "", $str);
    return $pdo->query($_POST[$str]);
}