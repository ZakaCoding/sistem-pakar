<?php
    session_start();
    include('koneksi.php');
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

      
      <div class="col-md-10 p-5 pt-5">
      <form  method="post" action="prosesdiagnosa.php">
        <h4><i class="fas fa-disease"></i> DIAGNOSA</h4><hr>
          <br>
          <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kode</th>
                      <th scope="col">Nama Gejala</th>
                      <th scope="col">Kondisi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    //menampilkan daftar gejala
                    $arrKDGejala = array();
                    $arrKDGejalaSelect = array();
                    $sql = "SELECT * FROM tb_gejala ORDER BY kode_gejala";
                    $id = 0;
                    $result = $konek_db -> query($sql);
                    while ($row = $result -> fetch_array()){
                        $id++;
                        echo "<tr><td>". $id ."</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td class='opsi'><select name='evidence[]' id='kondisi' . $id . '' class='opsikondisi'/><option data-id='0' value='0' >Pilih jika sesuai</option>";
                        // $arrKDGejala[] = $row -> nama_gejala;
                        // $arrKDGejalaSelect[] = $row -> $id;
                        $s = "SELECT * FROM tb_kondisi order by id_kondisi";
                        $q = mysqli_query($konek_db, $s);
                        while ($rw = mysqli_fetch_array($q)) {
                ?>      
                        <option data-id="<?php echo $rw['id_kondisi']; ?>" value="<?php echo $row['kode_gejala'] . '_' . $rw['id_kondisi']; ?>"><?php echo $rw['nama_kondisi']; ?></option>
                        <?php
                            }
                            echo '</select></td>';
                            }
                        ?>
                </tbody>
          </table>
          <br>
          <button type="submit" name="submit"  class="btn btn-primary">CEK TINGKAT DEPRESI</button>
        </form>
         
      </div>
      
   </div>
  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!----  if(count($_POST['gejala'])<2){
                    echo "Pilih minimal 2 gejala";
                } ----> 