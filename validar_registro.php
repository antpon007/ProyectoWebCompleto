<?php if(isset($_POST['submit'])): 
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $regalo = $_POST['regalo'];
      $total_pedido = $_POST['total_pedido'];
      $fecha = date('Y-m-d H:i:s');

      //pedidos
      $boletos = $_POST['boletos'];
      $camisas = $_POST['pedido_camisas'];
      $etiquetas = $_POST['pedido_etiquetas'];
      include_once 'includes/funciones/funciones.php';
      $pedido = productos_json($boletos,$camisas,$etiquetas);

      //eventos
      $eventos = $_POST['registro'];
      $registro = evento_json($eventos);
      
        try{
          require_once('includes/funciones/bd_conexion.php');
          $sql = "INSERT INTO `registrados`(`nombre`, `apellido`, `email`, `fecha`";
          $sql .= ", `pases`, `talleres`, `id_regalo`, `total_pagado`)";
          $sql .= " VALUES (?,?,?,?,?,?,?,?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ssssssis",$nombre, $apellido, $email,$fecha,$pedido,$registro,$regalo,$total_pedido);
          $stmt->execute();
          $stmt->close();
          $conn->close();
          header('Location: validar_registro.php?exitoso=1');
        /* echo "<pre>";
          var_dump($sql);
          var_dump($registro);
         echo "</pre>";*/
        }catch(\Exception $e){
            echo $e->getMessage();
        }
      ?>      
    <?php endif; ?>
<?php include_once 'includes/templates/header.php';?>

  <section id="registroSeccion" class="seccion contenedor">
    <h2>Resumen de Registro</h2>
        <?php
          if(isset($_GET['exitoso'])):
            if($_GET['exitoso'] == "1"):
              echo "<h3>Registro Exitoso</h3>";
            else:
              echo "<h3>Registro Fallido, por favor intente nuevamente.</h3>";
            endif;
          endif;
        ?>
  </section>

<?php include_once 'includes/templates/footer.php';?>

