<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner</title>

  <!--Materialize files-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
 <br><br>
  <div >
    <div class="row">

      <div class="col s8 offset-s2">

        <div class="carousel carousel-slider center" style="max-height:650px; " >
          <div class="carousel-fixed-item center">

          </div>
          <div class="carousel-item">
            <img src="img1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img1.jpg" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="js/materialize.js"></script>

<script type="text/javascript">$(".brand-logo").sideNav();</script>
<!--carrucel-->
<script>
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 200
  });
  autoplay();

  function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
  }
</script>

<script>
  $(document).ready(function)
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function() {
    $('.sidenav').sidenav();
  });
</script>

</html>