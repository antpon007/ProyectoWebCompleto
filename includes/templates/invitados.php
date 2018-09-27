<section class="invitados seccion contenedor ocultar">
    <h2>Nuestros Invitados</h2>
    <?php 
      try{

        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados`";
        $resultado = $conn->query($sql);
      }catch(\Exception $e){
          echo $e->getMessage();
      }
    ?>
    
        <ul class="lista-invitados clearfix">
      <?php
        $calendario = array();
        while($invitados = $resultado->fetch_assoc()){?>       
            <li>
                <div class="invitado">
                <a class="invitado-info" href="#invitado<?php echo $invitados['id_invitado']; ?>">
                    <img src="img/<?php echo $invitados['url_imagen']; ?>">
                </a>
                <p><?php echo $invitados['nombre'] . " " . $invitados['apellido']; ?></p>
                </div>
            </li><!--invitados-->
            <div style="display:none">
                <div class="invitado-info" id="invitado<?php echo $invitados['id_invitado']; ?>">
                    <h2><?php echo $invitados['nombre'] . " " . $invitados['apellido']; ?></h2>
                    <img src="img/<?php echo $invitados['url_imagen']; ?>">
                    <p><?php echo $invitados['descripcion'];?></p>
                </div>
            </div>
      <?php } ?>
        </ul>       
      
  </div>
  </section>
  <!--seccion-->
  
  <?php
   $conn->close();
  ?>