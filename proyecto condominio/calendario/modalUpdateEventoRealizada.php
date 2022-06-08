<div class="modal" id="modalUpdateEventoRealizada"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar registro de mantención realizada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdateRealizada" id="formEventoUpdateRealizada" action="UpdateEventoRealizada.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idEvento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Información mantención</label>
      <div class="col-sm-12 ">
				<input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre mantención" required/>
			</div>
	
      <label for="estado" class="col-sm-12 control-label ">Estado de la mantencion:</label>
    <div class="col-sm-12">
      <select type="text" name="estado" id="estado" class="form-control"  >
       
        <option value="1">Realizada</option>
     

     </select>
		</div>
   
    <label for="observacion" class="col-sm-12  ">Observacion en la mantencion: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control area2" name="observacion" id="observacion" />
			
			</div>

      <label for="contratista" class="col-sm-12  ">Nombre del trabajador: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="contratista" id="contratista" />
			
			</div>

      <label for="empresa" class="col-sm-12  ">Nombre de la empresa encargada: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="empresa" id="empresa" />
			
			</div>
		
		
		
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" required/>
      </div>
    
    
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha de termino</label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final" required/>
      </div>
    </div>

    

    
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
  </form>
      
    </div>
  </div>
</div>
<script>
  /*
  const estadoMan = document.querySelector('#modalUpdateEvento #estado');
  for(i= 0,j = estadoMan.length; i < j; i++){
    console.log(estadoMan[i].textContent);
    if(estadoMan[i].textContent == "Realizada"){
      
    }
  }*/
  
</script>