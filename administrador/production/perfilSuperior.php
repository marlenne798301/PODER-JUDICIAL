<?php
include_once "php/conexion.php";
include_once "php/sesiones.php";
?>
<link rel="stylesheet" href="js/alert.css">

<script src="js/alert.js"></script>

        <!-- top navigation -->
        <div class="top_nav sticky-top">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right text-light">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle btn btn-light" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <?php echo $_SESSION['user']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="#" onclick="indexphp()"> Ir a página de inicio</a>
    
                      <a class="dropdown-item"  href="#" onclick="logout()"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a>
                    </div>
                  </li>

                </ul>
              </nav>
            </div>
          </div>
          
        <!-- /top navigation -->