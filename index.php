<?php
$siteinfo = array(
    "_db_host_" => "localhost",
    "_db_user_" => "root",
    "_db_pass_" => "",
    "_db_name_" => "e_campuz"
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                <?php
                try {
                    $dbcon = new PDO("mysql:host=" . $siteinfo['_db_host_'] . ";dbname=" . $siteinfo['_db_name_'] . "", "" . $siteinfo['_db_user_'] . "", "" . $siteinfo['_db_pass_'] . "");
                    $stmt = $dbcon->prepare("SELECT * FROM tb_mahasiswa, tb_matakuliah, tb_mahasiswa_nilai WHERE tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id AND tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id AND tb_mahasiswa_nilai.mk_id = 2 ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 0,1");
                    $stmt->execute();
                    $marker = "";
                    while ($rowset = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo ("Nama Mahasiswa : ".$rowset['mhs_nama']."<br>");
                        echo ("Kode Matakuliah : ".$rowset['mk_kode']."<br>");
                        echo ("Nama Matakuliah : ".$rowset['mk_nama']."<br>");
                        echo ("Nilai : ".$rowset['nilai']);
                    }
                    $dbcon = null;
                } catch (PDOException $e) {
                    
                }
                ?>	
    </body>
</html>
