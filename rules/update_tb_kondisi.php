<?php
// Forces update table tb_kondisi with csv datatable

include "../koneksi.php";

if (($handle = fopen("datatable_cf_pakar.csv", "r")) !== FALSE)
{
    $count = 1;
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
    {
        // UPDATE user_data SET hasweb="{$data[1]}" WHERE consultant_id = "{$data[0]}"
        // $query = "UPDATE `tb_rules` SET `cf_pakar` = $data[3] WHERE `kode_gejala` = '".$data[0]."'"; // Update cf_pakar
        $query = "UPDATE `tb_rules` SET `mb` = $data[1], `md` = $data[2] WHERE `kode_gejala` = '".$data[0]."'"; // update mb and md data
        if(mysqli_query($konek_db, $query))
        {
            echo $count . "<br>";
            $count++;
        }
        else
        {
            echo "Error <br>";
        }
        // echo $data[0] . "<br>";
    }
    fclose($handle);
}
