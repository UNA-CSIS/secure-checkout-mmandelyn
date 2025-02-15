<!--Mandy McGinnis
CIS 476
Credit Card-->

<?php
session_start();

$_SESSION['taxAMT'] = round($_SESSION['subtotal'] * 0.095,2);
$_SESSION['TOTAL'] = $_SESSION['subtotal'] + $_SESSION['taxAMT']
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>E-Commerce</title>
</head>

<body>
    <p><h1>Fruit Sales</h1>
    <h2>Tax Calculation</h2></p>
<ul>
    <li><h3>Apples</h3> Quantity: <?=$_SESSION['item01']?>  Price: <?=$_SESSION['total01']?></li>
    <li><h3>Bananas</h3> Quantity: <?=$_SESSION['item02']?>  Price: <?=$_SESSION['total02']?></li>
    <li><h3>Oranges</h3> Quantity: <?=$_SESSION['item03']?>  Price: <?=$_SESSION['total03']?></li>
</ul>
<p><h3>Subtotal = $<?=$_SESSION['subtotal']?> </h3> 
   <h3>Tax Amount at 9.5% = $<?=$_SESSION['taxAMT']?></h3> 
   <h3>Total = $<?=$_SESSION['TOTAL']?> </h3>
</p>
<br>

<form method="post" action="login_pg.php">
    <p><input type="submit" name="next" value="Checkout"></p>
</form>

<form method="post" action="index.php">
    <p><input type="submit" name="back" value="Continue Shopping"></p>
</form>

</body>
</html>