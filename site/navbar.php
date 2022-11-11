<?php require_once ('./config/db.php'); 
$endereco = "SELECT * FROM enderecosite where Column1 = 1";
$result = $mysqli->query($endereco);
while($row = $result->fetch_array())
{
$endereco[] = $row;
}
?>
 <?php foreach ($row as  $value) { ?>
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
              <?php } ?>