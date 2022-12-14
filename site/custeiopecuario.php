<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Sulplan</title>
    <?php require_once ('./config/db.php'); 
//Endereço e Telfone
$mysqli = new mysqli($host, $user, $pass, $database);
$fone = "SELECT * FROM enderecosite where Column1=1";
       $result = $mysqli->query($fone); 
       while($p_fone = $result->fetch_array())
        { 
          $fones[] = $p_fone;
       
        }
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="js/fk.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;family=Poppins:wght@400;600&amp;family=Kalam:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-700">
            <?php foreach ($fones as  $value) { ?>
              <div class="rd-navbar-aside">
                <ul class="list-inline list-inline-md">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:#"><?php echo $value['tele']; ?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:#"><?php echo utf8_decode($value['email']); ?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#"><?php echo $value['endereco']; ?></a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <?php } ?>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-sulplan.jpg" alt="" width="251" height="70"/><img class="brand-logo-light" src="images/logo-inverse-251x70.png" alt="" width="251" height="70"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="creditorural.php">Crédito Rural</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="topografia.php">Topografia</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="ambiental.php">Ambiental</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="custeioagricola.php">Custeio Agrícola</a></li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="custeiopecuario.php">Custeio Pecuário</a></li>
                      <li class="rd-nav-item" >
                      <a class="rd-nav-link" href="{{ url('/twitter')}}">
                        <img src="images/twitter.png"  width="50" height="50">
                      </a>
                      </li>

                    </ul>
                  </div>
                  <!-- RD Navbar Search-->

                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <section class="section breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/bg-breadcrumbs.jpg">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">C U S T E I O   P E C U Á R I O</h2>
        </div>
      </div>
    </div>
    <?php 
 require_once ('./config/db.php'); 

 $credito = "SELECT texto FROM paginas where id = 5";
 $result = $mysqli->query($credito);
 $mysqli->set_charset("utf8");
 while($row = $result->fetch_array())
 {
   $custeiopecuario_view[] = $row;
 }


 ?>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li class="active">Custeio Pecuário</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section section-md section-first bg-default text-md-left">
    <div class="container">
      <h2 class="text-primary">Custeio Pecuário:</h2>
      <?php  foreach ($custeiopecuario_view as $values) { echo $values[0]; } ?>
    </div>
  </section>

  <?php  include_once('./footer.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="./js/core.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
