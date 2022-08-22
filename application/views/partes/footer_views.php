  </body>
  <footer class="footer" style="margin-top: 50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center text-center">
            <ul class="footer_nav">
              <li><a href="<?php echo base_url("comercializacion");?>">Comercializacion</a></li>
              <li><a href="<?php echo base_url("nosotros");?>">Nosotros</a></li>
              <li><a href="<?php echo base_url("terminos");?>">Terminos y condiciones</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
            <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_nav_container" style="text-align: right;">
            <div class="cr">©2019 Todos los derechos reservados a MAXIM</div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</html>