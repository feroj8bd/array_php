    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARRAY</title>
    </head>

    <body>
        <h3>PHP Indexed Array</h3>

        <?php
        $city = array("Dhaka", "Mymensingh", "Khulna", "Sylhet");
        $length = count($city);
        echo "$city[1].<br>";
        echo count($city);

        echo  "<h4>using for loop in array</h4>";

        for ($i = 0; $i < $length; $i++) {
            echo $city[$i];
            echo "<br>";
        }
        ?>

        <h3>PHP Associative Array</h3>

        <?php
        $run = array('Tamim' => "25", 'Sakib' => "45", 'Mushfiq' => "48" ,'Mahmudullah' => "32");

        echo "Tamim get = " . $run['Tamim'] . " runs";

        echo  "<h4>using foreach  loop in array</h4>";

        foreach ($run as $k => $val) {
            echo "$k = $val" . " run <br>";
        }
        ?>

        <h3>PHP Multidimensional Arrays</h3>

        <?php
        $runs = array(
            array("Tamim", 22, 18),
            array("Sakib", 15, 13),
            array("Mushfiq", 5, 2),
            array("Mahmudullah ", 17, 15)
        );
        echo $runs[0][0] . ":In ball= " . $runs[0][1] . " ; Run= " . $runs[0][2] . "<br>";
        echo $runs[1][0] . ":In ball= " . $runs[1][1] . " ; Run= " . $runs[1][2] . "<br>";
        echo $runs[2][0] . ":In ball= " . $runs[2][1] . " ; Run= " . $runs[2][2] . "<br>";
        echo $runs[3][0] . ":In ball= " . $runs[3][1] . " ; Run= " . $runs[3][2] . "<br>";

        echo "<h4>We can also put a for loop inside another for loop</h4>";

        for ($row = 0; $row < 4; $row++) {
            echo "Row number $row";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $runs[$row][$col] . " </li>";
            }
            echo "</ul>";
        }

        ?>

        <h4>Sort Array in Ascending Order - sort()</h4>

        <?php
        $numbers = array("18", "25", "51", "30", "3", "14", "12", "7", "40");
        sort($numbers);

        for ($i = 0; $i < 9; $i++) {
            echo "$numbers[$i]";
            echo "<br>";
        }

        echo "<h3>sort arrays in descending order - rsort()</h3>";

        rsort($numbers);
        for ($x = 0; $x < 9; $x++) {
            echo "$numbers[$x]";
            echo "<br>";
        }
        ?>

    <h3>sort associative arrays in ascending order, according to the value - asort()</h3>

        <?php
        asort($run);
        foreach ($run as $k => $val) {
            echo "$k = $val";
            echo "<br>";
        }
        
        echo "<h3>Sort Array (Ascending Order), According to Key - ksort() </h3>";

        ksort($run);

        foreach ($run as $key => $value) {
            echo "$key = $value";
            echo "<br>";
        }

        echo "<h3>Sort Array (Descending Order), According to Value - arsort()</h3>";

            arsort($run);

            foreach ($run as $y => $v) {
                echo "$y = $v";
                echo "<br>";
            }

            echo "<h3>Sort Array (Descending Order), According to Key - krsort()</h3>";

                krsort($run);

            foreach ($run as $y => $v) {
                echo "$y = $v";
                echo "<br>";
            }
        ?>
      

    </body>

    </html>