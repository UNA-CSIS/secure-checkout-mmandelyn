<!--Mandy McGinnis
CIS 476
Credit Card-->

<?php
session_start();

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
    

        <form method="post" action="card_confirm.php">
           <p>
               <h2>Card Information</h2>
               <label for="cName">Customer Name</label>
               <input type="text" name="cName" id="cName" Required>
           </p>
           <p>
               <label for="cNumber">Card Number</label>
               <input type="number" name="cNumber" id="cNumber" Required>
           </p>
           <p>
               <label for="pNumber">Card CVV</label>
               <input type="number" name="cvv" id="cvv" Required>
           </p>
           <p>
               <label for="cDate">Expiration Date</label>
               <input type="text" name="cDate" id="cDate" Required>
           </p>

           <p><input type="submit" name="placeOrder" value="Place Order"></p>
        </form> 
   

    

</body>
</html>