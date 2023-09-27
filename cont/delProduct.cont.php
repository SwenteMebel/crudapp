<?php
include_once 'db.cont.php';
include_once 'function.cont.php';

if(isset($_POST['delete']) && isset($_POST['delname'])){
    $name = get_post($pdo, 'name'); 
    $query = "DELETE FROM product WHERE name=$name";
    $result = $pdo->query($query);
    

    header('Location: ../index.php');
}
function get_post($pdo, $var){
    return $pdo->quote($_POST[$var]);
}
