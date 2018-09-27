<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor ocultar">
    <h2>Calendario de Eventos</h2>
    <?php 
      try{

        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, ";
        $sql .= "nombre, apellido,icono ";
        $sql .= "FROM eventos INNER JOIN categoria_evento ";
        $sql .= "on eventos.id_categoria=categoria_evento.id_categoria INNER JOIN invitados ";
        $sql .= "on eventos.id_invitado=invitados.id_invitado ";
        $resultado = $conn->query($sql);
      }catch(\Exception $e){
          echo $e->getMessage();
      }
    ?>
    <div class="calendario clearfix">
      <?php
        $calendario = array();
        while($eventos = $resultado->fetch_assoc()){
          $fecha = $eventos['fecha_evento'];
          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'icono' => "fa " . $eventos['icono'],
            'categoria' => $eventos['cat_evento'],
            'invitado' => $eventos['nombre'] . " " . $eventos['apellido'],
          );
          $calendario[$fecha][] = $evento; 
        ?>       
      <?php } ?>
      
      <?php //imprime todos los eventos
      foreach($calendario as $dia => $lista_eventos){?>
        <h3>
          <i class="fa fa-calendar"></i>
          <?php 
            setlocale(LC_TIME, 'spanish');
            echo strftime("%A, %d de %B del %Y",strtotime($dia)); ?>
        </h3>
        <?php foreach($lista_eventos as $evento){?>
            <div class="dia">
              <p class="titulo"><?php echo $evento['titulo']; ?></p>
              <p class="hora"><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['fecha'] . " " . $evento['hora']; ?></p>
              <p><i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i><?php echo $evento['categoria']; ?></p>
              <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['invitado']; ?></p>

            </div>
        <?php }//fin foreach de eventos?>
      <?php } //fin foreach de fechas de calendario ?>
      
  </div>
  </section>
  <!--seccion-->
  
  <?php
   $conn->close();
  ?>

  <?php include_once 'includes/templates/footer.php'; ?>