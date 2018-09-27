<footer class="site-footer ocultar">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>brqwebcamp</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quo sequi quis provident porro. Maxime quaerat
          incidunt assumenda nihil ratione molestiae iusto odio natus, odit sequi vel aliquam? Cum, ad?</p>
      </div>
      <!--footer-informacion-->
      <div class="ultimos-tweets">
        <h3>Últimos <span>tweets</span></h3>
        <ul>
          <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptatibus accusantium</li>
          <li>beatae doloremque nesciunt praesentium, hic quidem omnis voluptatem illum facere asperiores </li>
          <li>doloribus impedit non nobis voluptas incidunt sapiente numquam!</li>
        </ul>
      </div>
      <!--ultimos-tweets-->
      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        </nav>
      </div>
      <!--menu-->
    </div>
    <!--contenedor-->
    <p class="copyright">Todos los derechos reservados &copy; BRQWEBCAMP 2018.</p>
  </footer>
  <!--fite-footer-->



  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')

  </script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  <script src="js/index.js"> </script>
  <script src="js/registro.js"> </script>
  <script src="js/jquery.countdown.min.js"> </script>
  <script src="js/jquery-animateNumber.js"> </script>
  <script src="js/jquery.lettering.js"> </script>
  <script src="js/jquery.waypoints.min.js"> </script>
  <?php $archivo = basename($_SERVER['PHP_SELF']); 
        $pagina = str_replace(".php","",$archivo);
        if($pagina == 'invitados' || $pagina == 'index'){
            echo '<script src="js/jquery.colorbox-min.js"> </script>';
        }else if($pagina == 'conferencias'){
            echo '<script src="js/lightbox.js"> </script>';
        }
  ?>
   
  <script src="js/apimap.js"> </script>
  <script src="js/main.js"> </script>
  
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
