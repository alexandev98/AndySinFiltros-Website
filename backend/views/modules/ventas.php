<?php

// if($_SESSION["perfil"] != "administrador"){

// echo '<script>

//   window.location = "inicio";

// </script>';

// return;

// }

?>

<div class="content-wrapper">
  
   <section class="content-header">
      
    <h1>
      Gestor ventas
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor ventas</li>
      
    </ol>

  </section>


  <section class="content">

    <div class="box"> 

      <div class="box-header with-border">
        
        <?php

        include "inicio/grafico-ventas.php";

        ?>

      </div>

      <div class="box-body">

        <div class="box-tools">

          <a href="views/modules/reportes.php?reporte=purchases">
            
              <button class="btn btn-success">Descargar reporte en Excel</button>

          </a>

        </div>

        <br>
        
        <table class="table table-bordered table-striped dt-responsive tablaVentas" width="100%">
        
          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>Asesoría</th>
              <th>Imagen Asesoría</th>
              <th>Cliente</th>
              <th>Foto Cliente</th>
              <th>Venta</th>
              <th>Metodo</th>
              <th>Fecha y Hora Asesoría</th>
              <th>Enlace de Zoom</th>
              <th>Email</th>
              <th>Dirección</th>
              <th>País</th>
              <th>Fecha de Compra</th>

            </tr>

          </thead> 


        </table>


      </div>

    </div>

  </section>

</div>