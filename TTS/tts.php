<!DOCTYPE html>
<html lang="en">
<head>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <h1 style="text-align:center">Starbuck Vote</h1>
    <!-- Carousel wrapper -->
  <!-- Inner -->
  <div class="ulang" style="text-align:right">
  <a href="destroy.php"><img src="reset.png" width=100px></i></a>
  </div>
 
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <?php
    session_start();
    ?>
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="cappucino.jpeg"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body" style='text-align:center'>
                <h5 class="card-title">Cappucino</h5>
                <p class="card-text" style='text-align:center'>
                <?php
                  if(isset($_SESSION['satu'])){
                    echo "<img src='star.png' style='text-align:center' width=50px>";
                    echo $_SESSION['satu'];
                  }
                  ?>
                </p>
                <div class="aikon" style="text-align:center" >
                    <a href="cek.php?as=1" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?as=2" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?as=3" style="color:#000000"><i class="ri-star-line"></i></a>   
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="latte.jpeg"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body" style='text-align:center'>
                <h5 class="card-title">Latte</h5>
                <p class="card-text" style='text-align:center'>
                <?php
                  if(isset($_SESSION['dua'])){
                    echo "<img src='star.png' style='text-align:center' width=50px>";
                    echo $_SESSION['dua'];
                  }
                  
                  
                  ?>
                </p>
                <div class="aikon" style="text-align:center" >
                    <a href="cek.php?ad=1" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?ad=2" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?ad=3" style="color:#000000"><i class="ri-star-line"></i></a>   
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="espresso.jpeg"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body" style='text-align:center'>
                <h5 class="card-title">Mocha</h5>
                <p class="card-text" style='text-align:center'>
                <?php
                  if(isset($_SESSION['tiga'])){
                    echo "<img src='star.png' style='text-align:center' width=50px>";
                    echo $_SESSION['tiga'];
                  }
                  ?>
                </p>
                <div class="aikon" style="text-align:center" >
                    <a href="cek.php?at=1" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?at=2" style="color:#000000"><i class="ri-star-line"></i></a>
                    <a href="cek.php?at=3" style="color:#000000"><i class="ri-star-line"></i></a>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</html>