<?php
// Pagina die Alles weergeeft op de website. 
include_once "model/db.model.php";

$query = "SELECT * FROM product";
$result = $pdo->query($query);


echo "<table><tr> <th>Number</th> <th>Product</th> <th>Price</th> <th>Edit</th> <th>Remove</th></tr>";

while ($row = $result->fetch()){
    $id = htmlspecialchars($row['id']);
    $prod = htmlspecialchars($row['name']);
    $pric = htmlspecialchars($row['price']);

    echo <<<_END
    
    <tr><td>$id</td><td>$prod</td><td>$pric</td><td><a href='products.php'>Edit</a></td><td>
    <form method='post' action='../model/delProduct.model.php'>
    <input type='hidden' name='delete' value='yes'>
    <input type='hidden' name='id' value='$id'>
    <input type='submit' value='Delete'>
    
    </form></td></tr>

    _END;
}
echo "</table>";

