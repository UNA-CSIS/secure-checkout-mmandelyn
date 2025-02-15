<!--Mandy McGinnis
CIS 476
Credit Card-->

<?php
session_start();

$cNumber = $_POST['cNumber'];


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>E-Commerce</title>
</head>

<body>
    <p><h1>Fruit Sales</h1>
    <h2>Checkout</h2></p>

    <?php 
        include 'functions.php'; 
        cardValidation($cNumber); 
    ?>
    <form method="post" action="checkout_pg.php">
        <p><input type="submit" name="next" value="Back"></p>
    </form>
</body>

 