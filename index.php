<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($a = 1; $a < 50; $a++) {
            if (($a % 3 == 0) && ($a % 5 == 0) ) {
                echo "Foo <br>";
            } elseif ($a % 3 == 0) {
                echo "Bar <br>";
            } elseif($a % 5 == 0){
                echo "FooBar <br>";
            }
        }
        ?>
    </body>
</html>
