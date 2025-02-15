<!--Mandy McGinnis
CIS 476
Credit Card Assignment-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Commerce</title>
    </head>
    <body>
        <form method="post" action="order_summary.php">
            <p>
                <h1>Fruit Sales</h1>
                <h2>Apples</h2>
                Single, for $0.75 each. <br>
                <label for="item01">Quantity:</label>
                <input type="number" name="item01" id="item01">
            </p>
            <p>
                <h2>Bananas</h2>
                By the bushel, for $2.26 each. <br>
                <label for="item02">Quantity:</label>
                <input type="number" name="item02" id="item02">
            </p>
            <p>
                <h2>Oranges</h2>
                Single, for $0.88 each <br>
                <label for="item03">Quantity:</label>
                <input type="number" name="item03" id="item03"> 
            </p>
            <p>
                <input type="submit" name="next" value="Next">
            </p>
        </form>
    </body>
</html>
