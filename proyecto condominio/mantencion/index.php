    <!-- head -->
    <?php include('../partes/head.php') ?>
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
        <div id="content" class=" fondo2 w-100">

              <section class="bg-light py-2">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 col-md-8">
                            <h1 class="font-weight-bold mb-0">Areá de mantención de instalaciones</h1>
                            <p class="lead text-muted">Seleccione que desea hacer</p>
                          </div>
                         
                      </div>
                  </div>
              </section>

              

              <section>
                  <div class="contenedor-boton-cuerpo">
                  <a href="../calendario/index.php">
                    <input type="submit" class="boton" name="submit"  value="Registro de mantención">
                  </a>
                  </div>
             
                  <div class="contenedor-boton-cuerpo">
                    <a href="../mantenciones">
                     <input type="submit" class="boton" name="submit"  value="Registrar empresa">      
                    </a>
                  </div>
             
                  <div class="contenedor-boton-cuerpo">
                    <a href="../mantenciones">
                        <input type="submit" class="boton" name="submit"  value="Listar empresas">
                    </a>
                  </div>
                  <div class="contenedor-boton-cuerpo">
                    <a href="../tools/listarMantenciones.view.php">
                        <input type="submit" class="boton" name="submit"  value="Listar mantenciones">
                    </a>
                  </div>
              </section>

              

        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>

</html>