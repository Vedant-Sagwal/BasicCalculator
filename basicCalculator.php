<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Basic Calculator</title>
        <meta name="author" content="Vedant Sagwal">
        <meta name="description" content="A basic calculator to do (+,-,*,/)">
    </head>
    <body>
    <h1>Basic Calculator</h1>
         <form action="basicCalculator.php" method="get">
            <p>
                <label for="num1">Enter a number</label>
                <input type="number" id="num1" name = "num1">
            </p>
            <p>
                <label for="num2">Enter another number</label>
                <input type="number" id="num2" name="num2">
            </p>
            <p>
                <label for="operartor">Choose operation</label>
                <select name="operator" id="operator">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
                </select>
            </p>
            <button type="submit">Submit</button>
         </form>
         <br>
         <section id ="add">
         <?php
            $num1=$_GET["num1"];
            $num2=$_GET["num2"];
            $num3=$_GET["operator"];
            if ($num3 == "add")
            {
                echo "Sum is ".($num1 + $num2);
            }
            else if ($num3=="subtract")
            {
                echo "Difference is : ".($num1- $num2);
            }
            else if($num3 == "multiply")
            {
                echo "Product is : ".$num1*$num2;
            }
            else if ($num3 == "divide")
            {
                echo "Division is : ".($num1 / $num2);
            }
         ?>
         </section>
</body>
</html>
</html>
