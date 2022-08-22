 
<body>
  <header class="header trans_300">

    <!-- Top Barra -->
    <?php if(($this->session->userdata("logged_in")) and (($perfil_id) =="1")){?>
    <div class="top_nav">
      <div class="container ml-5" >
        <li class="account">
          <a style="color: white;" href="#"><?php echo $apellido,", ",$nombre ?><i class="fa fa-angle-down"></i></a>
          <ul class="account_selection" style="width: 120%">
            <li><a href="<?php echo base_url("MiCuenta");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Mis datos</a></li>
            <li><a href="<?php echo base_url("PanelControl");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Panel</a></li>
            <li><a href="<?php echo base_url("logout");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Cerrar sesión</a></li>
          </ul>
        </li>
      </div>
    </div>

    <?php } else if (($this->session->userdata("logged_in")) and (($perfil_id) =="2")){?>
    <div class="top_nav">
      <div class="container ml-5" >
        <li class="account">
          <a style="color: white;" href="#"><?php echo $apellido,", ",$nombre ?><i class="fa fa-angle-down"></i></a>
          <ul class="account_selection" style="width: 120%">
            <li><a href="<?php echo base_url("MiCuenta");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Mis datos</a></li>
            <li><a href="<?php echo base_url("logout");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Cerrar sesión</a></li>
          </ul>
        </li>
      </div>
    </div>

    <?php } else {?>
    <div class="top_nav">
      <div class="container ml-5" >
        <li class="account">
          <a style="color: white;" href="#">Mi Cuenta<i class="fa fa-angle-down"></i></a>
          <ul class="account_selection" style="width: 120%">
            <li><a href="<?php echo base_url("login");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Ingresar</a></li>
            <li><a href="<?php echo base_url("registro");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrate</a></li>
          </ul>
        </li>
      </div>
    </div>
    <?php }?> 


    <!-- Barra de navegacion -->
    <div class="main_nav_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-right">
            <div class="logo_container">
              <a style="color: black;" href="<?php echo base_url("welcome");?>">max<span>im</span></a>
            </div>
            <nav class="navbar sticky-top">
              <ul class="navbar_menu" style="margin-top: 15px">
                <li><a href="<?php echo base_url("welcome");?>">inicio</a></li>
                <li><a href="<?php echo base_url("tienda/0");?>">catalogo</a></li>
                <li><a href="<?php echo base_url("contacto");?>">contacto</a></li>
              </ul>

              <ul class="navbar_user" style="margin-top: 15px">
                <li class="checkout">
                  <a href="<?php echo base_url("shop_controller/carrito");?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="checkout_items" class="checkout_items"><?php echo $this->cart->total_items();?></span>
                  </a>
                </li>
              </ul>

              <div class="hamburger_container">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>
<div class="fs_menu_overlay"></div>
  <div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
      <ul class="menu_top_nav">
 <!-- USUARIOS -->
  <?php if(($this->session->userdata("logged_in")) and (($perfil_id) == "2")){?>
        <li class="menu_item has-children">
          <a href="#"><?php echo $apellido,", ",$nombre ?><i class="fa fa-angle-down"></i></a>
          <ul class="menu_selection">
            <li><a href="<?php echo base_url("MiCuenta");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Mis datos</a></li>
            <li><a href="<?php echo base_url("logout");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Cerrar sesión</a></li>
          </ul>
          </li>
          <li class="menu_item"><a href="<?php echo base_url("welcome");?>">inicio</a></li>
          <li class="menu_item"><a href="<?php echo base_url("tienda/0");?>">catalogo</a></li>
          <li class="menu_item"><a href="<?php echo base_url("contacto");?>">contacto</a></li>
          </ul>
          </div>
  </div>

 <!--  ADMINISTRADOR -->
<?php } else if(($this->session->userdata("logged_in")) and (($perfil_id) =="1")){?>
        <li class="menu_item has-children">
          <a href="#"><?php echo $apellido,", ",$nombre ?><i class="fa fa-angle-down"></i></a>
          <ul class="menu_selection">
            <li><a href="<?php echo base_url("MiCuenta");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Mis datos</a></li>
            <li><a href="<?php echo base_url("PanelControl");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Panel</a></li>
            <li><a href="<?php echo base_url("logout");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Cerrar sesión</a></li>
          </ul>
          </li>
          <li class="menu_item"><a href="<?php echo base_url("welcome");?>">inicio</a></li>
          <li class="menu_item"><a href="<?php echo base_url("tienda/0");?>">catalogo</a></li>
          <li class="menu_item"><a href="<?php echo base_url("contacto");?>">contacto</a></li>
          </ul>
          </div>
  </div>

<!-- USUARIOS GENERALES -->
<?php } else {?>
        <li class="menu_item has-children">
          <a href="#">Mi Cuenta<i class="fa fa-angle-down"></i></a>
          <ul class="menu_selection">
            <li><a href="<?php echo base_url("login");?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Ingresar</a></li>
            <li><a href="<?php echo base_url("registro");?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrarse</a></li>
          </ul>
          </li>
          <li class="menu_item"><a href="<?php echo base_url("welcome");?>">inicio</a></li>
          <li class="menu_item"><a href="<?php echo base_url("tienda/0");?>">catalogo</a></li>
          <li class="menu_item"><a href="<?php echo base_url("contacto");?>">contacto</a></li>
          </ul>
    </div>
  </div>
      <?php } ?>