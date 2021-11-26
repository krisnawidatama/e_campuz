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
            $aplikasi[1] = 'gtAkademik';
            $aplikasi[2] = 'gtFinansi';
            $aplikasi[3] = 'gtPerizinan';
            $aplikasi[4] = 'eCampuz';
            $aplikasi[5] = 'eOviz';
            
            $a = 1;
            while ($a <= 5){
                echo $aplikasi[$a]."<br />";
                $a++;
            }
        ?>
    </body>
</html>
