<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui/material-ui.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<?php
include_once "php/sesiones.php";
include_once "php/conexion.php"

?>
<div class="clearfix"></div>
<div class="navbar nav_title mb-3" style="border: 0;">
  <a href="panel.php" class="site_title"><img src="http://pjdgo.gob.mx/wp-content/uploads/2023/05/Logo-PJDGO-2022.png"
      alt="" style="width: 50px; margin-bottom: 10px; margin-right: 15px;"> <span
      class="text-secondary">PJDGO</span></a>
</div>
<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="https://scontent.fpbc5-1.fna.fbcdn.net/v/t39.30808-6/330816279_716579243308411_7535275319113138641_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=jrdbOGit1fkAX9esejl&_nc_ht=scontent.fpbc5-1.fna&oh=00_AfCaw3vFn3grfmhuDfKXDXaHGwBykTehF-kYzPS_IE7KWg&oe=649A8B69" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Bienvenido(a),</span>
    <h2><?php echo $_SESSION['user']; ?></h2>
  </div>
</div>
<!-- /menu profile quick info -->
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu mt-3">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu position-sticky">
      <li><a href="panel.php"><i class="fa fa-home"></i> Panel principal</a></li>
      <li><a><i class="fa fa-edit"></i> Formularios <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="form.php">Registrar nuevos usuarios</a></li>
          <!-- <li><a href="form_advanced.html">Advanced Components</a></li>
          <li><a href="form_validation.html">Form Validation</a></li>
          <li><a href="form_wizards.html">Form Wizard</a></li>
          <li><a href="form_upload.html">Form Upload</a></li>
          <li><a href="form_buttons.html">Form Buttons</a></li> -->
        </ul>
      </li>
      <li><a><i class="fa fa-newspaper-o"></i> Noticias y eventos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="tables.html">Tables</a></li>
          <li><a href="tables_dynamic.html">Table Dynamic</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bar-chart-o"></i> Estadística <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="chartjs.html">Chart JS</a></li>
          <li><a href="chartjs2.html">Chart JS2</a></li>
          <li><a href="morisjs.html">Moris JS</a></li>
          <li><a href="echarts.html">ECharts</a></li>
          <li><a href="other_charts.html">Other Charts</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-clone"></i>Documentos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
          <li><a href="fixed_footer.html">Fixed Footer</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-wechat"></i>Chat Bot <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Preguntas frecuentes</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="menu_section">
    <h3>Trámites y soporte</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bug"></i> Errores <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="e_commerce.html">E-commerce</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="project_detail.html">Project Detail</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li><a href="profile.html">Profile</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-windows"></i> Trámites <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="page_403.html">403 Error</a></li>
          <li><a href="page_404.html">404 Error</a></li>
          <li><a href="page_500.html">500 Error</a></li>
          <li><a href="plain_page.html">Plain Page</a></li>
          <li><a href="login.html">Login Page</a></li>
          <li><a href="pricing_tables.html">Pricing Tables</a></li>
        </ul>
      </li>
      </li>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->

