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
    <form method="post" action="index.php?action=hitung">
        <input type="number" name="satu" required>
        <input type="number" name="dua" required>
        <button type="submit">Hitung</button>
    </form>
    <body>
        <?php
        if (isset($_GET['action']) == "hitung"):
            $a = $_POST['satu'];
            $b = $_POST['dua'];
            $hasil = ($a % $b) + 2;
            echo "<br >Hasil Perhitungan ".$a." : ".$b." = ".$hasil;
        endif;
        ?>
    </body>
</html>
