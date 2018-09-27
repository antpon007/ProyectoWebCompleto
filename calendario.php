<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor ocultar">
    <h2>Calendario de Eventos</h2>
    <?php 
      try{

        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, ";
        $sql .= "nombre, apellido ";
        $sql .= "FROM eventos INNER JOIN categoria_evento ";
        $sql .= "on eventos.id_categoria=categoria_evento.id_categoria INNER JOIN invitados ";
        $sql .= "on eventos.id_invitado=invitados.id_invitado ";
        $resultado = $conn->query($sql);
      }catch(\Exception $e){
          echo $e->getMessage();
      }
    ?>
    <div class="calendario">
      <?php
        $calendario = array();
        while($eventos = $resultado->fetch_assoc()){
          $fecha = $eventos['fecha_evento'];
          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['cat_evento'],
            'invitado' => $eventos['nombre'] . " " . $eventos['apellido'],
          );
          $calendario[$fecha][] = $evento; 
        ?>       
      <?php } ?>

      <pre><?php var_dump($calendario); ?></pre>
  </div>
  </section>
  <!--seccion-->
  
  <?php
   // $conn->close();
  ?>

  <?php include_once 'includes/templates/footer.php'; ?>