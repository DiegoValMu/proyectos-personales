 <!-- head -->
 <?php include('../partes/head.php') ?>
 <head>
   
 </head>
    <!-- fin head -->

<body>
    <div class="d-flex" id="content-wrapper">
      <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
      <!-- fin sideBar -->

        <div class="w-100">

        <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="fondo2 w-100">

              <section class=" ">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <h2 class="text-center" id="title">Listado de mantenciones registradas</h2>
                    </div>
                  </div>
                </div>
              </section>

              <section >
                <div id="tablaLista" class="table-responsive">
                  <table id="tablaMantenciones" class="table table-striped" style="width:100%">
                    <thead>
                      <tr class="text-center">
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Observacion</th>
                        <th>Fecha inicio</th>
                        <th>Fecha termino</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <?php
                      include ('../calendario/config.php');
                      $result = $con->query("SELECT * FROM mantencion");
                       while( $data = mysqli_fetch_array($result)){
                      ?>
                      <tr class="text-center">
                        <td><?php  echo $data["tipo_man"];?></td>
                        <td><?php switch($data["estado"]){
                                      case 1:
                                        echo "Realizada";
                                      break;
                                      case 2:
                                        echo "En curso";
                                      break;
                                      case 3:
                                        echo "En espera";
                                      break;
                                      case 4:
                                        echo "Cancelada";
                                      break;
                                      default:
                                        echo "sin seleccionar";
                                      break;
                        } ?></td>
                        <td><?php  echo $data["observacion"];?></td>
                        <td><?php   $timestampi = strtotime($data["fecha_inicio"]); 
                                    $newDatei = date("m-d-Y", $timestampi );
                                    echo "$newDatei";
                        ?></td>
                        <td><?php   $timestampf = strtotime($data["fecha_fin"]); 
                                    $newDatef = date("m-d-Y", $timestampf );
                                    echo "$newDatef";
                        ;?></td>
                      </tr>
                      <?php   }  ?>
                    </tbody>
                  </table>
                </div>
              </section>


        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

   
    <script type="text/javascript">
    $(document).ready(function () {
    $('#tablaMantenciones').DataTable({
      "oLanguage": {
            "sProcessing":     "Procesando...",
            "sLengthMenu": 'Mostrar <select>'+
                '<option value="5">5</option>'+
                '<option value="10">10</option>'+
                '<option value="25">20</option>'+
                '<option value="50">50</option>'+
                '<option value="100">100</option>'+
                '<option value="-1">All</option>'+
                '</select> registros',    
            "sZeroRecords":    "No se registran solicitudes",
            "sEmptyTable":     "no hay datos disponibles para la tabla",
            "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Filtrar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
    }
    });
  });
  </script>
 
     
</body>

</html>