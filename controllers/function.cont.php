<?php 
//Functie pagina, hier worden de functies beheerd.

// Verwijderd de '' na het ingeven van een product 
function editValue($pdo, $var){
    $var = htmlentities($var);
    $var = stripslashes($var);
  
    $result = $pdo->quote($var);         
    return str_replace("'", "", $result); 
}

//connect met DB nadat je op de knop Delete drukt
function get_post($pdo, $var){
    return str_replace("'", "", $var);
    return $pdo->quote($_POST[$var]);
}


