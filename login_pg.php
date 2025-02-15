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
   
        <form method="post" action="validation_pg.php">
           <p>
               <h2>Log In:</h2>
               <label for="userName">Username</label>
               <input type="text" name="userName" id="userName" Required>
           </p>
           <p>
               <label for="passcode">Passcode</label>
               <input type="text" name="passcode" id="passcode" Required>
           </p>

           <p><input type="submit" name="next" value="Login"></p>
        </form> 
   

    

</body>
</html>