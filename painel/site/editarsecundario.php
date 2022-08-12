<?php
require_once '../../vendor/autoload.php';
require_once  '../../site/config/db.php';

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

if (filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $idinput = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
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
    </head>
    <body>
    <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
          
            <div class="col-md-9 col-lg-7 col-xl-5">
          
           <div class="block-1 pe-xl-70">
         
           <h5 class="footer-modern-title"> Editar esta imagem</h5>
         
          <?php 
            $table_cr = "SELECT * from img_banners where id = $idinput";
            $result = $mysqli->query($table_cr);
            while($row = $result->fetch_assoc())
            {
              $tbcredito_view[] = $row;
            }

        
             
            
          ?>
          
          <form action="atualizall.php" method="post">
                  <div class="row row-10 gx-10 gx-10" data-lightgallery="group">   
                    <div class="col-10 col-sm-10 col-lg-10">
                   
               
                    
                       <?php  foreach ($tbcredito_view as $key => $value) { ?>
                    
                  
                    <a class="item" href="../../site/banners/<?=$value['imagem']; ?>" data-lightgallery="item"><img src="../../site/banners/<?=$value['imagem']; ?>" alt="" width="300" height="300"/></a>
                   
                    <br> <br> <br>
                    <div class="form-wrap">
                    <label>Título para este banner</label>
                      <input class="form-input"  type="text" name="titulo" value="<?php echo $value['titulo']; ?>" data-constraints="@Required"> 
                    </div>
                       
                    <div class="form-wrap">
                    <label>Digite o texto para esse banner da página Inicial</label>
                      <textarea class="form-input"  name="pequenotexto" data-constraints="@Required"> <?php echo $value['textopequeno']; ?></textarea>
                    </div>
                   
                            <input type="hidden" name="idimagem" value="<?php echo $value['id']; ?>">
                      <?php } ?>
                    
                    </div>
                    
                  </div>
                </div>
                <button class="btn btn-block btn-primary" type="submit">Salvar</button>
                   </form>
                  
             
            
           
               
             
            </div>
          </div>
        </div>
      </section>
    </body>
</html>