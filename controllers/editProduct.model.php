<?php
// Hier worden de edit producten behandeld. Zodra er op edit gedrukt wordt dan komt het hier

include_once "db.model.php";
include_once "../controllers/function.cont.php";

if(isset($_POST['editproduct']) && isset($_POST['editprice'])){
    $product = editValue($pdo, $_POST['editproduct']);
    $editprice = editValue($pdo, $_POST['editprice']);

    $query = "UPDATE product SET price='$editprice' WHERE name='$product'";
    $result = $pdo->query($query);
    header("Location: ../products.php");
    exit();
} else {
    echo "<span>Can't find $product , try again.</span>";
    exit();
}