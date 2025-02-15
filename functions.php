
<?php
        
        function cardValidation($cNumber){
            
            $TOTAL = $_SESSION['TOTAL'];
            $end = substr((string)$cNumber,-4);

            while ($cNumber == true){
                if (strlen($cNumber) == 16 and substr((string)$cNumber, 0, 2)>= 51 and substr((string)$cNumber, 0, 2)<= 55){
                    echo "Your MASTERCARD ending with $end has been charged $$TOTAL";
                } elseif (substr((string)$cNumber, 0, 1) == 4 and strlen($cNumber) == 13 or strlen($cNumber) == 16){
                        echo "Your VISA ending with $end has been charged $$TOTAL";
                } elseif (strlen($cNumber) == 15 and substr((string)$cNumber, 0, 2) == 34 or substr((string)$cNumber, 0, 2) == 37){
                    echo "Your AMEX ending with $end has been charged $$TOTAL";
                } else{
                    echo "Invalid Card";
                }
                break;
            }   
        }
        
    ?>

<?php

function loginVerification($userName, $passcode){
      if ($userName == $passcode){
        echo "Welcome $userName!"; ?>
        <form method="post" action="checkout_pg.php">
            <p><input type="submit" name="next" value="Proceed to Checkout"></p>
        </form>
    <?php
    } else {
        echo "Username or Passcode incorrect. Please try again."; ?>
        <form method="post" action="login_pg.php">
            <p><input type="submit" name="next" value="Back to the Login Page"></p>
        </form>
    <?php
    } 
}?>
