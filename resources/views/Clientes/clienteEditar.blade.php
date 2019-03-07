<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-info" id="exampleModalLabel">Editar clientes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form class="" action="/Fclientes/{{ $item->id }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
                    <input type="text" name="id" style="visibility:hidden"> 
                    <label class="text-info">Identificación</label>
                    <input type="text" name="" id="identificacion" value="{{ $item->identificacion }}" class="form-control input-sm"  disabled="true">
                    <label class="text-info">Razon Social</label>
                    <input type="text" name="" id="razon_social" value="{{ $item->razon_social }}" class="form-control input-sm">
                    <label class="text-info">Email</label>
                    <input type="text" name="" id="email" value="{{ $item->email }}" class="form-control input-sm">
                    <label class="text-info">telefono</label>
                    <input type="text" name="" id="telefono" value="{{ $item->telefono }}" class="form-control input-sm">
                    <label class="text-info">Total a pagar</label>
                    <input type="text" name="" id="total_pagar" value="{{ $item->total_pagar }}" class="form-control input-sm">
            </div>
            <div class="modal-footer">
              <button type="submit" name="send" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
        </div>
      </div>