<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo "Hello World This is Zoyace From Class 464 <br>";

        echo "<br>";

        $x = 10;
        $y = 5;

        $sum = $x + $y; // Add $x and $y
        $difference = $x - $y; // Subtract $y from $x
        $product = $x * $y; // Multiply $x and $y
        $quotient = $x / $y; // Divide $x by $y
        $remainder = $x % $y; // Get the remainder of $x divided by $y

        echo "Sum: " . $sum . "<br>";
        echo "Difference: " . $difference . "<br>";
        echo "Product: " . $product . "<br>";
        echo "Quotient: " . $quotient . "<br>";
        echo "Remainder: " . $remainder . "<br>";

        echo "<br>";
       
       
    ?>

    <table>
      <?php for($row=1 ; $row<=8 ; $row++){
            echo"<tr>";
            for($col=1 ; $col<=8 ;  $col++){
                $total = $row +  $col;
                if($total%2 == 0){
                   echo '<td  style="width:30px; height:30px; background-color:#000;"></td>';
                }
                else{
                    echo '<td  style="width:30px; height:30px; background-color:#fff;"></td>';
                }
            }
            echo "</tr>";
        }
     ?>
    </table>
    
</body>

</html>