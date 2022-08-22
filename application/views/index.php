<!--CUERPO/IMAGEN/CARRUSEL-->
<div class="main_slider" style="background-image: url(img/portadaff.jpg)">
</div>

<!-- Categorias -->
<div class="banner">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/banner_3.jpg); background-size: contain;">
          <div class="banner_category">
            <a href="<?php echo base_url("tienda/1");?>">hombres</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/banner_2.jpg); background-size: contain;">
          <div class="banner_category">
            <a href="<?php echo base_url("tienda/3");?>">accesorios</a>
          </div>
        </div>
      </div>
        
      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/banner_1.jpg); background-size: contain;">
          <div class="banner_category">
            <a href="<?php echo base_url("tienda/2");?>">mujeres</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<br>
<br>

<hr style="width: 50%; margin-left: 25%; margin-right: 25%;">
<!-- Lo Mas Vendido -->
<div class="best_sellers">
  <div class="container">

    <div class="row">
      <div class="col text-center">
        <div class="section_title new_arrivals_title">
          <h2>Lo más destacado</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider">

            <?php foreach ($productos as $product){
                    $id = $product['id'];
                    $name = $product['nombre'];
                    $price = $product['precio'];
                  ?>
            <div class="owl-item product_slider_item">
              <div class="product-item">
                <div class="product_image">
                    <img src="<?php echo base_url() . $product['imagen'] ?>">
                </div>

                <div class="product_info">
                  <h6 class="product_name"><a href=""><?php echo $name; ?></a></h6>
                  <?php 
                    echo form_open('anadirCarrito');
                    echo form_hidden('id', $id);
                    echo form_hidden('name', $name);
                    echo form_hidden('price', $price);
                  ?>
                  <br>
                </div>
                <div id='add_button'>
                  <?php
                    $btn = array(
                            'class' => 'red_button add_to_cart_button',
                            'value' => 'AÑADIR AL CARRITO',
                            'name' => 'action'
                    );
                        
                    // Submit Button.
                    echo form_submit($btn);
                    echo form_close();
                  ?>
                </div>
              </div>
            </div>
            <?php } ?>
            


          </div>

          <!-- Slider Navigation -->
          <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
      
  </div>
</div>

<!-- Nosotros Info -->

<hr style="width: 50%; margin-left: 24%; margin-right: 25%;">
<div class="benefit">
  <div class="container">
    <div class="row benefit_row" style="padding-left: 70px">
      <div class="col-lg-3 benefit_col" style="margin-right: -30px">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>envios a todo el país</h6>
            <p>No somos responsables por  retrasos de envios o envios reprogramados</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col" style="margin-right: -30px">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>formas de pago</h6>
            <p>12 cuotas sin interes con mercado pago, aceptamos pago en efectivo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col" style="margin-right: -30px">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>7 días para realizar reclamos</h6>
            <p>Sólo se aceptan cambios y/o devoluciones de productos SIN USO</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>abierto todas las semanas</h6>
            <p>8AM - 09PM</p>
            <h6>fines de semanas</h6>
            <p>8AM - 5PM</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>