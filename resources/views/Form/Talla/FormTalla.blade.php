<div class="row">
	<div class="col-sm-11">
	<h2 class="text-info">Talla</h2>
		<table class="table table-hover table-condensed table-bordered">
			<button class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar">
            Agregar nuevo
				<span class="fa fa-plus"></span>
			</button>
            <br>
            <br>
			<thead class="p-3 mb-2 bg-secondary text-white">
                <td>Talla</td>
                <td>Editar</td>
                <td>Eliminar</td>
			</thead>
			<thead>
                <td></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target="#ModalEditar"><i class="fas fa-user-edit"></i>
					</button>
				</td>
				<td>
					<button class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- Modal agregar -->
<div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel" >Agregar Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<label class="text-info">Talla pago</label>
			<input type="text" name="" id="talla" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal agregar -->
<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">Editar clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label class="text-info">Talla pago</label>
		<input type="text" name="" id="talla" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
