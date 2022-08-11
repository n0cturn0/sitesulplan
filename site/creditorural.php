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
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-sulplan.jpg" alt="" width="251" height="70"/><img class="brand-logo-light" src="images/logo-inverse-251x70.png" alt="" width="251" height="70"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
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

    <!-- Credito -->
    <section class="section breadcrumbs-custom">
  <div class="parallax-container" data-parallax-img="images/bg-breadcrumbs.jpg">
    <div class="breadcrumbs-custom-body parallax-content context-dark">
      <div class="container">
        <h2 class="breadcrumbs-custom-title">C R É D I T O  R U R A L</h2>
      </div>
    </div>
  </div>
  <div class="breadcrumbs-custom-footer">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active">Crédito Rural</li>
      </ul>
    </div>
  </div>
</section>
<section class="section section-md section-first bg-default text-md-left">
  <div class="container">
    <h2 class="text-primary">Crédito Rural:</h2>
    <?php 
      require_once ('./config/db.php'); 
      $credito = "SELECT texto FROM paginas where id = 1";
      $result = $mysqli->query($credito);
      while($row = $result->fetch_array())
      {
        $credito_view[] = $row;
      }

      foreach ($credito_view as $values)
      {
        echo $values[0];
      }

      $table_cr = "SELECT * from tabela_crural";
      $result = $mysqli->query($table_cr);
      while($row = $result->fetch_array())
      {
        $tbcredito_view[] = $row;
      }
    ?>
    <!-- <p>Financiamento podem ser de custeio ou investimento e tem regras próprias que dependem da atividade e porte do produtor.</p>
    <p>Tipos de projetos</p>
    <p><h5> Custeio Agrícola e Pecuário</h5></p>
    <p>Pode ser financiado nesta linha o custeio dos insumos para a produção agrícola e pecuária</p>
    <p><h5> MCR 6.2</h5></p>
    <p>
      Pode ser financiado nesta linha investimentos agropecuários que não se enquadram em outras linha ou tenham aquisição isolada ou ainda são itens financiados em promoções como feiras e eventos agropecuários.
    </p>
    <p><h5> FCO</h5></p>
    <p>Pode ser financiado por este programa investimentos agropecuários de todos os tipos, principalmente os de grande porte e com projetos integrados, conveniados e de agroindústria. Mas a linha esta vinculada aos interesses prioritários de fomento com normas da comissão regional do FCO.</p>

    
    <p><h5> BNDES</h5></p>
    <p>Pode ser financiado por este programa investimentos agropecuários de todos os tipos, principalmente os que não tem prioridade no FCO de qualquer porte com ou sem projetos integrados, conveniados e de agroindústria.</p> -->
    <br>
    <a href="https://www.gov.br/sudeco/pt-br/assuntos/fundo-constitucional-de-financiamento-do-centro-oeste/programacao-anual-de-financiamento-1/programacao-fco-2022-05-13.pdf"> <h4 class="breadcrumbs-custom-title">Programa FCO 2022</h4>
    <p> <img src="images/pdf.png" height="50" width="50"></p></a>
    <br></br>
    <table class="table table-dark">

        <thead>
          <tr>
          <th>Descrição</th>
          <th>Base de cálculo</th>
          <th>Preço</th>
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
        </tr>
        <?php } ?>
      </tbody>
    </table>



  </div>
</section>
    <!-- End Credito Rural -->


      <footer class="section footer-modern footer-modern-2">

        <div class="footer-modern-panel text-center">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Sulplan</span><span>.&nbsp;</span><span>Design Luiz Augusto&nbsp;</span><a href="#"></a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
