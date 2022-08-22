<style type="text/css">
  input{
    color: black;
  }
</style>
<div class="container contact_container">

    <!-- Map Container -->

  <div class="row">
    <div class="col">
      <div id="google_map">
        <div class="map_container">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4209.8805201409905!2d-58.822432494963756!3d-27.46697297846819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDI4JzAwLjciUyA1OMKwNDknMTIuNyJX!5e0!3m2!1ses!2sar!4v1555283896230!5m2!1ses!2sar" style="width: 100%; height: 100% "></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contacto -->

  <div class="row">

    <div class="col-lg-6 contact_col">
      <div class="contact_contents">
        <h1>Contáctenos</h1>
        <p>Hay muchas formas de contactarnos. Puede escribirnos una línea, llamarnos o enviarnos un correo electrónico, elegir lo que más le convenga.</p>
        <div>
          <p>(800) 000-0000</p>
          <p>info.maxim@gmail.com</p>
        </div>
        <div>
          <p>mm</p>
        </div>
        <div>
          <p>Horario de atención: 8.00-18.00 de lunes a viernes.</p>
          <p>Domingo: cerrado</p>
        </div>
      </div>

      <!-- Redes Sociales -->

      <div class="follow_us_contents">
        <h1>Síguenos</h1>
        <ul class="social d-flex flex-row">
          <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>

    <div class="col-lg-6 get_in_touch_col">
      <div class="get_in_touch_contents">
        <h1>¡Póngase en contacto con nosotros!</h1>
        <p>Rellene el siguiente formulario para recibir una información gratuita y confidencial.</p>
        <form action="<?php echo base_url('consulta')?>" method="post" class="form-sigin" reole="form" id="myform">
          <div>
            <input id="name" class="form_input input_name input_ph" type="text" name="name" placeholder="nombre" required="requerido" data-error="Se requiere nombre.">
            <input id="email" class="form_input input_email input_ph" type="email" name="email" placeholder="email" required="requerido" data-error="Se requiere el email.">
            <input id="asundo" class="form_input input_asunto input_ph" type="text" name="asunto" placeholder="Asunto" required="requerido" data-error="Se requiere asunto.">
            <textarea id="mensaje" class="input_ph input_message" name="mensaje"  placeholder="Mensaje" rows="3" required data-error="Por favor, escriba su mensaje."></textarea>
          </div>
          <div>
            <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">enviar mensaje</button>
          </div>
          <br>
          <div class="alert alert-success" style="visibility: <?php echo "$vision"?>;">
          Su consulta ha sido enviado correctamente.
          </div>
        </form>
        
      </div>

    </div>

  </div>
</div>