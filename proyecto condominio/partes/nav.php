<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light gradiente">
        <div class="container">
        
       <!--     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
           
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg><div class="nav" id="navbarSupportedContent">
              
                    <div  class=" buscando">
                        <input autocomplete="off" class="position-relative" type="search" id="buscar" placeholder="Buscar" aria-label="Buscar" required> 
                    
                    
             <!--   </form>https://previews.123rf.com/images/jemastock/jemastock1609/jemastock160905175/63043795-persona-ejecutiva-en-traje-con-la-ilustraci%C3%B3n-de-vector-de-imagen-de-iconos-de-negocios-relacionados-co.jpg-->
                <ul id="box-search">
                    <li><a href="../inicio"><i class="fas fa-search"></i>Inicio</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Usuarios</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Gastos Comunes</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Reservas</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Visitas</a></li>
                    <li><a href="../mantencion"><i class="fas fa-search"></i>Mantencion de instalaciones</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Paquete y correspondencia</a></li>
                    <li><a href="../perfil"><i class="fas fa-search"></i>Perfil</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Configuracion</a></li>
                    <li><a href="../calendario"><i class="fas fa-search"></i>Calendario</a></li>
                    <li><a href="../calendario"><i class="fas fa-search"></i>Registro de mantenciones</a></li>
                    <li><a href="../tools/listarMantenciones.view.php"><i class="fas fa-search"></i>Lista mantenciones registradas</a></li>
                </ul>
                </div>
                
                    <div>
                        <li class="logout" id="logout">
                        <img src="../assets/img/perfil.jpg" 
                        class="img-fluid rounded-circle avatar "
                        alt="imagen" /> Sesión
                            <div class=" menuSesion" id="menuSesion">
                                <a class="" href="../perfil/"><i class="fas fa-user"></i> Mi perfil</a>
                            <div class="dropdown-divider"></div>
                                <a class="" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                            </div>
                        </li>
                    </div>
                </div>
        </div>
        <script>
            const botonEsconder = document.querySelector('svg.bi.bi-list');
            const btnLogout = document.querySelector('#logout');
            inputSearch =       document.getElementById("buscar");
            box_search =        document.getElementById("box-search");


            console.log(botonEsconder);

            cargarEventsListeners();
            function cargarEventsListeners() {
                botonEsconder.addEventListener('click', mostrarOcultarSidebar);

                document.getElementById("buscar").addEventListener("keyup", buscador_interno);

                document.addEventListener("click", ocultarOpcion);
            }
            function mostrarOcultarSidebar(e){
                const sidebar = document.querySelector('#sidebar-container')
                if(sidebar.classList.contains('activo')){
                    console.log(sidebar);
                    sidebar.classList.remove('activo');
                    sidebar.classList.add('pasivo');
                    console.log(sidebar);
                } else {
                    console.log(sidebar);
                    sidebar.classList.remove('pasivo');
                    sidebar.classList.add('activo');
                    console.log(sidebar);
                }
                    
            }

            function ocultarOpcion(e){
                if(e.target.id != "buscar"){
                    box_search.style.display = "none";
                    inputSearch.value = "";
                }
            }
            

            function buscador_interno(){
                filter = inputSearch.value.toUpperCase();
                li = box_search.getElementsByTagName("li");

            //Recorriendo elementos a filtrar mediante los "li"
                for (i = 0; i < li.length; i++){

                    a = li[i].getElementsByTagName("a")[0];
                    textValue = a.textContent || a.innerText;

                    if(textValue.toUpperCase().indexOf(filter) > -1){

                        li[i].style.display = "";
                        box_search.style.display = "block";

                        if (inputSearch.value === ""){
                            box_search.style.display = "none";
                        }

                    }else{
                        li[i].style.display = "none";
                    }

                }
            }

           
        </script>
    </nav>
<!-- Fin Navbar -->