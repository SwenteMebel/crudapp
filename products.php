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
    <?php include_once "header.php";?>


    <!---->
    <div class="addform">
        <h3>Add Product</h3>
        <form action='addProduct.cont.php' method='post'>
            <input type='text' name='addProduct' placeholder='Name...'>
            <input type='number' name='price' placeholder="Price..." min=0 step=0.100>
            <input type='submit' value='Add Product'>
        </form>
    </div>

    <div class="custform">
        <h3>Customize Product</h3>
        <form action='custProduct.cont.php' method='post'>
            <input type='text' name='costProduct' placeholder='Name...'>
            <input type='number' name='costPrice' placeholder="Price..." min=0 step=0.100>
            <input type='submit' value='Change Product'>
        </form>
    </div>
        
    </body>
</html>