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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa fa-clock"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i>Manuel Ricardo De Avila Vasquez</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa fa-clock"></i>20:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i>Julio Alfonso Meza Iglesia</p>
            </div>
            <a href="#" class="button float-right ">Ver todos</a>
          </div><!--talleres-->
          <div id="conferencias" class="info-curso clearfix">
                <div class="detalle-evento">
                  <h3>¿Como aplicar POL (Lonchu-oriented programming)? </h3>
                  <p><i class="fa fa-clock"></i>10:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>10 de Dic</p>
                  <p><i class="fa fa-user"></i>Manuel Ricardo De Avila Vasquez</p>
                </div>
                <div class="detalle-evento">
                  <h3>Aplicando el ciclo infito, FOR en cascada</h3>
                  <p><i class="fa fa-clock"></i>12:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>10 de Dic</p>
                  <p><i class="fa fa-user"></i>Ing. Jhonatan Javier Rodriguez</p>
                </div>
                <a href="#" class="button float-right ">Ver todos</a>
          </div><!--conferencias-->
          <div id="seminarios" class="info-curso clearfix">
                <div class="detalle-evento">
                  <h3>Dependencia laboral: Inyectar errores con timer</h3>
                  <p><i class="fa fa-clock"></i>14:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>11 de Dic</p>
                  <p><i class="fa fa-user"></i>Manuel Ricardo De Avila Vasquez</p>
                </div>
                <div class="detalle-evento">
                  <h3>Dependencia laboral: Pruebas en caliente</h3>
                  <p><i class="fa fa-clock"></i>16:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>11 de Dic</p>
                  <p><i class="fa fa-user"></i>Julio Adolfo Ponce Attie</p>
                </div>
                <a href="#" class="button float-right ">Ver todos</a>
          </div><!--conferencias-->
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
            <a href="#" class="button hollow">Comprar</a>
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
            <a href="#" class="button ">Comprar</a>
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
            <a href="#" class="button hollow">Comprar</a>
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
      <a href="#" class="button transparente">Registro</a>
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