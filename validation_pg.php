<!--Mandy McGinnis
CIS 476
Credit Card-->

<?php
session_start();
$userName = $_POST['userName'];
$passcode = $_POST['passcode'];

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
        loginVerification($userName, $passcode); 
    ?>
</body>
</html>