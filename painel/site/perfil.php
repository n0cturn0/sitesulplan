<?php

require_once '../../vendor/autoload.php';
require_once  '../../site/config/db.php';

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Sulplan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="js/fk.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;family=Poppins:wght@400;600&amp;family=Kalam:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
textarea {
  width: 800px;
  height: 400px;
}

textarea.form-control {
  width: 100%;
}
</style>
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
              <div class="rd-navbar-aside">
                <ul class="list-inline list-inline-md">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:#">(67) 3272-1418</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:#">suplan@sulplan.com.br</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#">Rua Sergipe, 136 - Sidrol??ndia / MS - 79.170-000</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-sulplan.jpg" alt="" width="251" height="70"/><img class="brand-logo-light" src="images/logo-inverse-251x70.png" alt="" width="251" height="70"/></a>
                  </div>
                </div>
                <?php  include_once('./menutop.php');?> 
            </div>
          </nav>
        </div>
      </header>
      <?php
      
       $mysqli = new mysqli($host, $user, $pass, $database);
       $metas = "SELECT texto FROM inicial where id=3";
       $result = $mysqli->query($metas); 
       while($p_metas = $result->fetch_array())
        { $rows[] = $p_metas;
       
        }
        
      ?>

      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
          
            <div class="col-md-9 col-lg-7 col-xl-5">
          
           <div class="block-1 pe-xl-70">
         
          
          
          
          
                  <h5 class="footer-modern-title">P??gina Principal -  Perfil</h5>
                  
                </div>
                <form   method="post" action="update_perfil.php" enctype="multipart/form-data">
                <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message"></label>
                      <!-- <textarea class="form-input" id="contact-message" name="meta" data-constraints="@Required"> -->
                      <!-- <textarea class="form-control" id="exampleFormControlTextarea1" name="meta" rows="10"data-constraints="@Required"> -->
                      <textarea  name="meta" style="width: 100%;" data-constraints="@Required">
                      <?php foreach( $rows as $perfil) { echo $perfil['texto']; } ?>
                      </textarea>
                    </div>
                  </div>
             
              <!--RD Mailform-->
            
             
           
                 
                <div class="row row-20 row-narrow">
                  <div class="col-md-6">
                    <div class="form-wrap">
                   
                    
                    </div>
                  </div>
                  <div class="col-md-6">
                   
                  </div>
                  <div class="col-12">
                  
                  </div>
                
                
                  <div class="col-12">
                    <button class="btn btn-block btn-primary" type="submit">Atualizar Texto</button>
                  </div>
                </div>
              </form>
               
             
            </div>
          </div>
        </div>
      </section>
      <hr>

      <footer class="section footer-modern footer-modern-2">

        <div class="footer-modern-panel text-center">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Sulplan</span><span>.&nbsp;</span><span>Design Luiz Augusto&nbsp;</span><a href="#"></a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="./js/core.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/nice/nicEdit.js"></script>
    <script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
  </body>
</html>
