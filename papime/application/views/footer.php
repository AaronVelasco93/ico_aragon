<footer class="page-footer lime darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Conocenos</h5>
          <p class="grey-text text-lighten-4">Esta pagina fue desarrollada por Comunidad Camaleon 2019</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Acerca de</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Hecho por <a class="brown-text text-lighten-3" href="http://materializecss.com">Comunidad Camaleon 2019</a>
      </div>
    </div>
  </footer>

 <!--  Scripts-->
<script src="<?php echo base_url('assets/js/materialize.js') ?>"></script>
<script src="<?php echo base_url('assets/js/init.js') ?>"></script>

 
<!-- codigo pushpin -->
    <script>
      $(document).ready(function(){
        $('.pushpin-demo-nav').each(function() {
          var $this = $(this);
          var $target = $('#' + $(this).attr('data-target'));
          $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
          });
      });
        $('.target').pushpin({
          top: 0,
          bottom: 1000,
          offset: 0
        });
    
      });
    </script>

 
<!-- codigo carousel -->
 <script> $(document).ready(function() {  
  $(".slider").slider({ 
    full_width: true, 
    height : 600, 
    interval: 5000 });  
});  
</script>  
<!-- Inicializacion de aos-->
 <script> AOS.init();</script>

</body>
</html>