<?php
// Hier word het artikel verwijderd uit de DB en dus ook op de pagina.  

include_once 'db.model.php'; // Verbinding met de DB
include_once '../controllers/function.cont.php'; // Verbinding met de functie pagina 


if(isset($_POST['delete']) && isset($_POST['id'])){
    $id = get_post($pdo, $_POST['id']); 
    $query = "DELETE FROM product WHERE id=$id";
    $result = $pdo->query($query);
    header("Location: ../index.php");
}
