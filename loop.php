<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using_Loop</title>
</head>

<body>

    <h3> 1-50 even number using for loop</h3>

    <?php

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo $i . ' >';
        }
    }
    echo "<br><br>";
    for ($i = 1; $i <= 100; $i += 10) {
        echo $i . '<br>';
    }
    ?>

    <?php

        for ($i=3; $i <=7; $i++) { 
          
        }
    ?>

    <h3>1-50 odd number using while loop</h3>

    <?php
    $a = 1;

    while ($a <= 50) {
        if ($a % 2 != 0) {
            echo "$a.>";
        }
        $a++;
    }
    ?>
    <h3>print number using do-while loop</h3>

        <?php

            $a = 1;
            do {
                echo $a;
                $a++;
            } while ($a <= 10);
        ?>

<h3>print number using foreach loop</h3>

            <?php
            
                $cities =array("Dhaka"=>"1400", "Mymensingh"=>"2200", "Feni"=>"1900", "Jamalpur"=>"2300",     "Sherpur"=>"2400" );

                foreach ($cities as $city => $val){
                echo "$city = $val.<br>";
                }

                $name =array("F", "E", "R", "O", "J","AHAMED");

                foreach($name as $me){
                    echo "$me";
                }
            ?>

</body>

</html>