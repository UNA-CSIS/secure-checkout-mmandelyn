<!--Mandy McGinnis
CIS 476
Credit Card Assignment-->


<?php
session_start();
//need to figure out this error - its working but displaying weird on the finished product
$_SESSION['item01'] = $_POST['item01'];
$_SESSION['item02'] = $_POST['item02'];
$_SESSION['item03'] = $_POST['item03'];

if ($_POST['item01'] == FALSE){
    $_SESSION['item01'] = 0; }
if ($_POST['item02'] == FALSE){
    $_SESSION['item02'] = 0; }
if ($_POST['item03'] == FALSE){
    $_SESSION['item03'] = 0; }

$_SESSION['total01'] = $_SESSION['item01'] * 0.75;
$_SESSION['total02'] = $_SESSION['item02'] * 2.26;
$_SESSION['total03'] = $_SESSION['item03']* 0.88;

$_SESSION['subtotal'] = $_SESSION['total01'] + $_SESSION['total02'] + $_SESSION['total03'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>E-Commerce</title>
</head>

<body>

    <p><h1>Fruit Sales</h1>
    <h2>Order Summary</h2></p>
    <form method="post" action="tax_calc.php">
        
        <ul>
            <li> <h3>Apples</h3> Quantity: <?= $_SESSION['item01']?> Price: 
                <?=$_SESSION['total01']?> </li>
            <li> <h3>Bananas</h3> Quantity: <?= $_SESSION['item02']?> Price: 
                <?=$_SESSION['total02']?></li>
            <li> <h3>Oranges</h3> Quantity: <?= $_SESSION['item03']?> Price: 
                <?=$_SESSION['total03']?></li>
        </ul>
        <p><h3> Subtotal = $<?=$_SESSION['subtotal']?></h3></p>

        <p>
            <input type="submit" name="next" value="Confirm Order">
        </p>
    </form>
</body>
</html>

