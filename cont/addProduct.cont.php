<?php 
include_once "db.cont.php";
include_once "function.cont.php";

if(isset($_POST['addProduct']) && isset($_POST['price'])){
    $product = editValue($pdo, $_POST['addProduct']);
    $price = editValue($pdo, $_POST['price']);

    $stmt = $pdo->prepare("INSERT INTO product VALUES(NULL, ?,?)");
    $stmt->bindParam(1, $product, PDO::PARAM_STR, 128);
    $stmt->bindParam(2, $price, PDO::PARAM_STR, 10,2);

    $stmt->execute([$product, $price]);
    header('Location: ../products.php');
    die("Product $product is added with the price € $price");
}