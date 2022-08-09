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
    <title>Sulplan Painel de administração</title>
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
                      <div class="unit-body"><a href="#">Rua Sergipe, 136 - Sidrolândia / MS - 79.170-000</a></div>
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
            </div>
          </nav>
        </div>
      </header>
      <?php 
 require_once ('./config/db.php'); 
 $table_cr = "SELECT * from tabela_crural";
 $result = $mysqli->query($table_cr);
 while($row = $result->fetch_array())
 {
   $tbcredito_view[] = $row;
 }


 ?>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
          
            <div class="col-md-9 col-lg-7 col-xl-5">
          
           <div class="block-1 pe-xl-70">
          
           
         
          
          
                 
                  <div class="row row-10 gx-10 gx-10" data-lightgallery="group">
                   
                 
                    <div class="col-4 col-sm-2 col-lg-4">
                   
                    
                    </div>
                  
                  </div>
                </div>
        
              <h3>Edição da Tabela de crédito Rural</h3>
            
              <!--RD Mailform-->
            
             
              <form   method="post" action="updatecreditoruraltabela.php" enctype="multipart/form-data">
                 
                <div class="row row-20 row-narrow">
                <div class="col-12">
                    <div class="form-wrap">
                   

                    <table class="table table-dark">

<thead>
  <tr>
  <th>Descrição</th>
  <th>Base de cálculo</th>
  <th>Preço</th>
  <th></th>
  </tr>
</thead>
<tbody>
<?php 
foreach ($tbcredito_view as $key => $value) {
  # code...

?>
<tr>
  <td><?php echo $value['descricao'] ?></td>
  <td><?php echo $value['base_calculo'] ?></td>
  <td><?php echo $value['preco'] ?></td>
  <td><a href="./updatecreditorural.php?id=<?php echo $value['id']; ?>" type="button" class="btn btn-success btn-sm">Editar</a></td>
  
</tr>
<?php } ?>
</tbody>
</table>



                    </div>
                  </div>
                  
                  <!-- <div class="col-12">
                    <div class="form-wrap">
                    <label>Digite o texto para esse banner da página Inicial</label>
                      <textarea class="form-input" id="contact-2-message" name="pequenotexto" data-constraints="@Required"></textarea>
                    </div>
                  </div> -->
                
                
                  
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
