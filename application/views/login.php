<br><br>

  <div class="limiter">
    <div class="container-login100 responsive">
      <div class="wrap-login100">
        <?php echo form_open('verificoUsuario', ['class' => 'login100-form validate-form', 'role' => 'form']); ?>
          <span class="login100-form-title p-b-30">
            Ingrese a su cuenta
          </span>
         <div class="form-group">
            <div class="form-wrapper">
                <?php echo form_input(['name' => 'username', 
                    'id' => 'username', 
                    'class' => 'form-control',
                    'placeholder' => 'Usuario', 
                    'required'=>'required', 
                    'autofocus'=>'autofocus']); ?>
            </div>
            <div class="form-wrapper">
              <?php echo form_input(['type' => 'password',
                    'name' => 'password', 
                    'id' => 'password', 
                    'class' => 'form-control',
                    'placeholder' => 'Contraseña', 
                    'required'=>'required']); ?>
            </div>
          </div>
          
          <div class="container-login100-form-btn">

          
            <button class="login100-form-btn">
              <span style="color: white">Ingresar</span>
            </button>
          </div>

          <div class="w-full text-center p-t-10">
          <?php echo validation_errors(); ?>
          </div>

          <div class="w-full text-center p-t-150">
            <a href="<?php echo base_url('registro');?>" class="txt3">
              Registrarse
            </a>
          </div>
          <?php echo form_close(); ?>

        <div class="login100-more" style="background-image: url('img/bg-01.jpg');"></div>
      </div>
    </div>
  </div>