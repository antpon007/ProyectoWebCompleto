<?php include_once 'includes/templates/header.php';?>
  <section class="seccion contenedor ocultar">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quos velit laborum, culpa quae asperiores
      consequuntur
      corporis est, eveniet odio ullam quam quasi quas repellendus non maiores nam nesciunt repudiandae?
    </p>
  </section>
  <!--seccion-->
  <section class="programa ocultar">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>
    </div>
    <!--contenedor-video-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <?php 
      try{

        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `categoria_evento` order by `id_categoria` desc";
        $resultado = $conn->query($sql);
        $sql ="";
      }catch(\Exception $e){
          echo $e->getMessage();
      }
    ?>
          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ 
              $categoria = $cat['cat_evento'];?>
              <a href="#<?php echo strtolower($categoria); ?>">
                  <i class="fa <?php echo $cat['icono']; ?>"></i><?php echo $categoria; ?>
              </a>
              <?php 
                  try{
                    $sql .= "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, ";
                    $sql .= "nombre, apellido,icono ";
                    $sql .= "FROM eventos INNER JOIN categoria_evento ";
                    $sql .= "ON eventos.id_categoria=categoria_evento.id_categoria INNER JOIN invitados ";
                    $sql .= "ON eventos.id_invitado=invitados.id_invitado ";
                    $sql .= "AND eventos.id_categoria=" . $cat['id_categoria'] . " ";
                    $sql .= "ORDER BY `id_evento` LIMIT 2; ";
                  }catch(\Exception $e){
                      echo $e->getMessage();
                  }
                ?>
            <?php } ?>
            
          </nav>
          <?php $conn->multi_query($sql); 
          do{ 
              $resultado = $conn->store_result();
              $row = $resultado->fetch_all(MYSQLI_ASSOC);?>
              <?php $i=0;
              foreach($row as $evento):
                if($i % 2 == 0):?>
                  <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso clearfix">
              <?php endif; ?>
                    <div class="detalle-evento">
                      <h3><?php echo htmlspecialchars($evento['nombre_evento']); ?></h3>
                      <p><i class="fa fa-clock"></i><?php echo $evento['hora_evento']; ?> hrs</p>
                      <p><i class="fa fa-calendar"></i><?php echo $evento['fecha_evento']; ?></p>
                      <p><i class="fa fa-user"></i><?php echo $evento['nombre'] . " " . $evento['apellido']; ?></p>
                    </div>
                <?php if($i % 2 == 1):?>
                    <a href="calendario.php#calendarioSeccion" class="button float-right ">Ver todos</a>
                  </div>
                <?php endif; 
                $i++;?>
                    
              <?php endforeach;
              $resultado->free();
          }while($conn->more_results() && $conn->next_result());?>
          
        </div>
        <!--programa-evento-->
      </div>
      <!--contenedor-->
    </div>
    <!--contenido-programa-->

  </section>
  <!--.programa-->
  <?php include_once 'includes/templates/invitados.php'; ?>
  <div class="contador parallax ocultar">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero">0</p>Invitados
        </li>
        <li>
          <p class="numero">0</p>Talleres
        </li>
        <li>
          <p class="numero">0</p>Dias
        </li>
        <li>
          <p class="numero">0</p>Conferencias
        </li>
      </ul>
    </div>
    <!--contenedor-->
  </div>
  <!--contador parallax-->
  <section class="precios seccion ocultar">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php#registroSeccion" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php#registroSeccion" class="button ">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php#registroSeccion" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div id="mapa" class="mapa ocultar"></div>
  <section class="seccion ocultar">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum, dolorem quibusdam expedita provident
            vitae velit. Provident quam sint iste eum veniam, odit possimus asperiores recusandae distinctio
            laboriosam accusantium! Labore.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Eduin Navas<span>Auditor en @UciSabana</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum, dolorem quibusdam expedita provident
            vitae velit. Provident quam sint iste eum veniam, odit possimus asperiores recusandae distinctio
            laboriosam accusantium! Labore.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Eduin Navas<span>Auditor en @UciSabana</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum, dolorem quibusdam expedita provident
            vitae velit. Provident quam sint iste eum veniam, odit possimus asperiores recusandae distinctio
            laboriosam accusantium! Labore.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Eduin Navas<span>Auditor en @UciSabana</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--testimonial-->
    </div>

  </section>
  <div class="newsletter parallax ocultar">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter:</p>
      <h3>BrqWebCamp</h3>
      <a href="#mc_embed_signup" class="button_newsletter button transparente">Registro</a>
    </div>
    <!--contenido-->
  </div>
  <!--newsletter-->
  <section class="seccion ocultar">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p id="dias" class="numero"></p> días
        </li>
        <li>
          <p id="horas" class="numero"></p> horas
        </li>
        <li>
          <p id="minutos" class="numero"></p> minutos
        </li>
        <li>
          <p id="segundos" class="numero"></p> segundos
        </li>
      </ul>
    </div>
    <!--cuenta regresiva-->
  </section>
  <!--seccion-->
  <?php include_once 'includes/templates/footer.php';?>