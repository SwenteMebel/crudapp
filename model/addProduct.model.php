<?php 

// Deze pagina zorgt ervoor dat de producten toegevoegd worden aan de DB dmv placeholders. 
// Ook word hier de functie editValue aangeroepen die de quotes verwijderd. 
include_once "db.model.php";
include_once "../controllers/function.cont.php";

if(isset($_POST['addProduct']) && isset($_POST['price'])){
    $product = editValue($pdo, $_POST['addProduct']);
    $price = editValue($pdo, $_POST['price']);

    $stmt = $pdo->prepare("INSERT INTO product VALUES(NULL, ?,?)");
    $stmt->bindParam(1, $product, PDO::PARAM_STR, 128);
    $stmt->bindParam(2, $price, PDO::PARAM_STR, 10,2);

    $stmt->execute([$product, $price]);
    header('Location: ../products.php');
    exit();   
}

