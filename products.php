<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>CRUD-Applicatie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Styles-->
    <link rel='stylesheet' href="css/style.css">
    </head>
    <body>

    <!--Header-->
    <?php include_once "view/header.php";?>


    <!-- Form dat toevoegen van artikelen in de DB -->
    <div class="addform">
        <h3>Add Product</h3>
        <form action='../model/addProduct.model.php' method='post'>
            <input type='text' name='addProduct' placeholder='Name...' required>
            <input type='number' name='price' placeholder="Price..." min=0 step=any required>
            <input type='submit' value='Add Product'>
        </form>
    </div>
 <!-- Form dat wijzigingen van artikelen verstuurd naar de DB -->
    <div class="custform">
        <h3>Edit Product Price</h3>
        <form action='../model/editProduct.model.php' method='post'>
            <input type='text' name='editproduct' placeholder='Name...'>
            <input type='number' name='editprice' placeholder="Price..." min=0 step=any >
            <input type='submit' value='Change Product'>
        </form>
    </div>
        
    </body>
</html>