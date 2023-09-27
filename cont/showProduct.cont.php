<?php
include_once "db.cont.php";
$query = "SELECT * FROM product";
$result = $pdo->query($query);


echo "<table><tr> <th>id</th> <th>Product</th> <th>Price</th> <th>Edit</th> <th>Remove</th></tr>";

while ($row = $result->fetch(PDO::FETCH_BOTH)){
    $id = htmlspecialchars($row['id']);
    $prod = htmlspecialchars($row['name']);
    $pric = htmlspecialchars($row['price']);
    echo "<tr><td>$id</td><td>$prod</td><td>$pric</td><td><a href='products.php'>Edit</a></td><td>
    <form methos='post' action='cont/delProduct.cont.php'>
    <input type='hidden' name='delete' value='yes'>
    <input type='hidden' name='delname' value='$prod'>
    <input type='submit' value='Delete'>
    
    <form></td></tr>";
}
echo "</table>";

?>