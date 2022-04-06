
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
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sistem Pakar</a>
    <div class="icon">    
        <!---<button type="button" class="btn btn-primary" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="fas fa-sign-in-alt"></i> Login</button>--->
        <a href="login.php" class="btn btn-primary">Login</a><br>
    </div>
  </div>
  </nav>

  <!----- Carousel ----->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 625px">
                    <img src="img/slide1.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>SISTEM PAKAR DIAGNOSA TINGKAT DEPRESI MAHASISWA</h1><hr>
                        <a href="register.php" class="btn btn-primary">Register</a><br>
                    </div>
                </div>
                <div class="carousel-item" style="height: 625px">
                    <img src="img/slide3.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Seberapa besar depresimu?</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

   
    <!---- Modal Login
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-lock"></i> Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form method="post" role="form" action="login1.php" >
                    <div class="modal-body">
                        <div class="mb-3" method="post">
                            <label for="username" class="col-form-label fw-bold"><i class="fas fa-user"></i> Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-3" method="post">
                            <label for="password" class="col-form-label fw-bold"><i class="fas fa-eye-slash"></i> Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" method="post"  id="submit" name="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>  ---->

    
   
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