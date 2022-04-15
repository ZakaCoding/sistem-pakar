<?php
    session_start();
    include('koneksi.php');

    // Data Certainly Factor
    $cf_user = []; // CF user from user input
    $cf_pakar = []; // CF pakar from database
    // Data Densities
    $densities  = [];

    // get data evidance
    $evidance = $_POST['evidence'];

    foreach($evidance as $data) // Data from users input
    {
        if($data != "0")
        {
            $value = explode("_", $data);

            /**
             * EXPLAIN
             * 
             * this $value is data from user input the data is like G01_1 and explode to array divide by _
             * SO....
             * $value[0] will return kode_gejala e.g G01
             * $value[1] will return id_kondisi
             */
            
            // This query to get nilai from tb_kondisi
            // data will be like this 0.00 or 0.40 something
            $query = mysqli_query($konek_db, "SELECT `id_kondisi`, `nilai` FROM `tb_kondisi` WHERE `id_kondisi` = $value[1]");

            $cf = mysqli_fetch_assoc($query);
            
            /** 
             * Push data to array format
             * data will be like this
             * 
             * [
             *  [
             *      'kode_gejala' => currentVal,
             *      'nilai' => currentVal
             *  ],
             * ]
             * 
             * to get ouput from this array use this format :
             * $cf_user[id_of_array]['key']
             * 
             * THE DATA
             * $cf_user[0]['kode_gejala'] --> will return 'G01'(string)
             * $cf_user[0]['nilai'] --> will return '0.40'(string) you must convert this to float or double
             * 
             * 
            */
            array_push($cf_user, ['kode_gejala' => $value[0], 'cf_user' => $cf['nilai']]); // push data cf_user

            // get data cf_pakar from database 
            $query = mysqli_query($konek_db, "SELECT `cf_pakar`, `kode_gejala` FROM `tb_rules` WHERE `kode_gejala` = '" . $value[0] . "'");

            // data
            $cf_db_pakar = mysqli_fetch_assoc($query);

            // push data to array format
            array_push($cf_pakar, ['cf_pakar' => $cf_db_pakar['cf_pakar']]);

            /**
             * Push belief data
             */
            $belief = floatval($cf['nilai'] * $cf_db_pakar['cf_pakar']);
            $plaus = floatval(1 - $belief);

            $diagnose = [];
            // get kode_penyakit
            $query = mysqli_query($konek_db, "SELECT `kode_penyakit`, `kode_gejala` FROM `tb_rules` WHERE `kode_gejala` = '" . $value[0] . "'");
            $rows = mysqli_num_rows($query);

            while($data = mysqli_fetch_assoc($query))
            {
                array_push($diagnose, $data['kode_penyakit']);
            }

            // First Densities
            array_push($densities , ['kode_gejala' => $value[0] ,'belief' => $belief, 'plausability' => $plaus, 'densities' => floatval($belief + $plaus), "diagnose" => $diagnose]);
        }
    }

    echo "<pre> Data densities <br>";
    print_r($densities);
    echo "</pre>";

    // check next densities
    /**
     * Create new rules tables combination for next densities
     * EXAMPLE :
     * __________________________________________________________
     * |                   | m2() = 0,12 | m2(theta) = 0,88    |
     * | m1 = 0,12         | RESULT      | RESULT              |
     * | m1(theta) = 0,88  | RESULT      | RESULT              |
     * |                   |             |                     |
     * |                   |             |                     |
     * |                   |             |                     |
     * __________________________________________________________
     * 
     * RESULT :
     *  __________________________________________________________
     * |                   | m2() = 0,12 | m2(theta) = 0,88    |
     * | m1 = 0,12         | 0,24        | 0,1056              |
     * | m1(theta) = 0,88  | 0,1056      | 0,7744              |
     * |                   |             |                     |
     * |                   |             |                     |
     * |                   |             |                     |
     * __________________________________________________________
     * 
     */
    
    $table_header = [];
    $table_body = ["P1" => 0, "P2" => 0, "PComb" => 0, "P_0" => 0];
    $table_result = [];

    for($i = 1; $i < count($densities); $i++)
    {
        array_push($table_header, [
            "x" => $densities[$i]['belief'], 
            "y" => $densities[$i]['plausability']
        ]);
    }

    echo "<pre>TABLE HEADER <br>" ;
    print_r($table_header);
    echo "</pre>";

    // Probability
    /**
     * Penyakit P1
     * Penyakit P2
     * Penyakit {P1, P2, P3}
     * Penyakit 0
     * 
     */
    $probs = 3; // ["P1","P2" ,"P2,P3,P4", "0"];

    $P1 = 0;
    $P2 = 0;
    $P_Comb = 0;
    $P_theta = 0;
    
    // Assign table body for operand
    $i = 0;
    foreach ($table_body as $key => $value) {
        if($key === "P1")
        {
            $table_body[$key] = $densities[0]['belief'];
            $table_body["P_0"] = $densities[0]['plausability'];

            // assign to result table
            array_push($table_result, floatval($table_body[$key] * $table_header[$i]['x']));
            array_push($table_result, floatval($table_body[$key] * $table_header[$i]['y']));
        }
        elseif($key == "P2")
        {

        }
        elseif($key == "PComb")
        {

        }
        $i++;
    }

    echo "Data table header ";
    echo "<pre>" ;
    print_r($table_body);
    echo "</pre>";

    // Assign result table
    

    echo "Data table result";
    echo "<pre>" ;
    print_r($table_result);
    echo "</pre>";

    exit();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Sistem Pakar</title>
  </head>
  <body>


  <!----- Navbar ----->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Pakar</a>
    <div class="icon">
        <a href="logout.php"><button type="button" class="btn btn-primary" id="myBtn" style="margin-left: 1100px;"><i class="fas fa-sign-out-alt"></i> Logout</button>    
    </div>
  </div>
  </nav>


  <!---- Sidebar ----->
  <div class="row no-gutters mt-5">
      <div class="col-md-2 mt-2 pt-4 ps-3 bg-dark">
        <ul class="nav flex-column ms-4 px-3 position-fixed">
            <li class="nav-item">
                <a class="nav-link text-white" href="depresi.php"><i class="fas fa-home me-2"></i>Beranda</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="diagnosa.php"><i class="fas fa-diagnoses me-2"></i>Diagnosa</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="riwayat.php"><i class="fas fa-history me-2"></i>Riwayat</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="profil.php"><i class="fas fa-user-circle me-2"></i>Profil</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="tentang.php"><i class="fas fa-exclamation-circle me-2"></i>Tentang</a><hr class="bg-light">
            </li>
        </ul>
      </div>

      <div class="col-md-10 mt-5">
            <div class="card ">
                <div class="card-body">
                    <?php
                        
                     ?>
                </div>
            </div>       
        </div>
    <div>
    