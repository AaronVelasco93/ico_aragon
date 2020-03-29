<br>&nbsp;<br>
</div>

<style>
    #td_foot_r {
        /*border: white 3px solid;*/
        border-top: 0px;
        border-right: 2px solid white;
        border-bottom: 0px;
        border-left: 0px;
    }

    #td_foot_l {
        /*border: white 3px solid;*/
        border-top: 0px;
        border-right: 0px;
        border-bottom: 0px;
        border-left: 2px solid white;
              
    }


    table,
    th,
    td {
        border: 1px solid black;
        border-top:0px;
        border-bottom: 0px;
        border-left: 0px;
        border-right: 0px;
        padding-bottom: 0px;
        padding-top: 0px;
        margin: 0; 
       
    }
   

  
    #p_footer {
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-top: 0px;
        margin: 0;
        font-weight: bold;
        color:white;
    }
   
</style>

<footer class="page-footer" style="background-color:#E8762A">

    <!-- datos jefatura -->
    <div class="container black-text">

        <div class="row" style="background-color:#E8762A">

            <table align="center" border=0>
                <tr>
                    <td>
                        <table align="center" border=1 id="td_foot_r"
                            <tr>
                                <td>
                                    <p id="p_footer" style="text-align:right; ">Ing. Jorge Arturo López Hernández <br>
                                    Jefe de carrera    
                                    </p>
                                </td>
                            </tr>
                           
                        </table>
                    </td>

                    <td>
                        <table align="center" border=1 id="td_foot_l">
                            <tr>
                                <td >
                                    <p align="left" id="p_footer">Ing. Oscar Estrada García <br>
                                    Secretario Técnico
                                    </p>
                                </td>

                            </tr>
                            

                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br>



        </div>

        <!--
    <div class="row">   
        <blockquote class="blockquote_blanco col s6 m6 l6 left">
          <p align="right" style="color:#FFFFFF; font-weight: bold;;">Ing. Jorge Arturo López Hernández </p>
          <p align="right" style="line-height: 5px; color:#FFFFFF; font-weight: bold;">Jefe de carrera</p>
          
        </blockquote>    
        <blockquote class="blockquote_naranja col s6 m6 l6 right">
          <p style="color:#FFFFFF;font-weight: bold;" >Ing. Oscar Estrada García</p>
          <p style="line-height: 5px; color:#FFFFFF; font-weight: bold;">Secretario Técnico</p>
        </blockquote>    
    </div>
-->
    </div>
    <!-- datos jefatura -->




</footer>

<!--  Scripts-->
<script src="<?php echo base_url('assets/js/materialize.js') ?>"></script>
<script src="<?php echo base_url('assets/js/init.js') ?>"></script>


<!-- codigo pushpin -->
<script>
    $(document).ready(function() {
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
                var instance = M.Carousel.init(elems, {
                    fullWidth: true
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
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
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
        if (mid > y.length) {
            mid = 1
        }
        y[mid - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 2 seconds
    }
</script>


<script>
    AOS.init();
</script>




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
            if (content.style.maxHeight) {
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
            if (content.style.maxHeight) {
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
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

</body>

</html>