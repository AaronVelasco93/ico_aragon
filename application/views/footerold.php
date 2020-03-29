
<br>&nbsp;<br>
  </div>


<footer class="page-footer">

<!-- datos jefatura -->
 <div class="container black-text colorfes">
    <div class="row">   
        <blockquote class="blockquote_blanco col s6 m6 l6 left">
          <p align="right">Ing. Jorge Arturo López Hernández </p>
          <p align="right" style="line-height: 5px;">Jefe de carrera</p>
        </blockquote>    
        <blockquote class="blockquote_naranja col s6 m6 l6 right">
          <p>Ing. Oscar Estrada García</p>
          <p style="line-height: 5px;">Secretario Técnico</p>
        </blockquote>    
    </div>

    <br>&nbsp;<br>
     <br>&nbsp;<br>
   
</div>
<!-- datos jefatura -->




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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instance = M.Carousel.init(elems, {fullWidth:true
  }); 

</script>


<script type="text/javascript">
  
  var myIndex = 1;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>


<script type="text/javascript">
  
var mid = 1;
carousel();
function carousel() {
    var j;
    var y = document.getElementsByClassName("mySlidesPeque");
    for (j = 0; j < y.length; j++) {
       y[j].style.display = "none";  
    }
    mid++;
    if (mid > y.length) {mid = 1}    
    y[mid-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>


<script> AOS.init();</script>




  <script type="text/javascript">
    
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
  });

  </script>



<script>
  //opciones deplegables
var coll = document.getElementsByClassName("desplegable");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
  //opciones deplegables
var coll = document.getElementsByClassName("desplegabledos");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
  //opciones deplegables
var coll = document.getElementsByClassName("desplegableicono");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>










</body>
</html>