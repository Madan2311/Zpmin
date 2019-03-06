<div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-info" id="exampleModalLabel" >Agregar Clientes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form class="" action="/Fclientes" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <label class="text-info">Identificación</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control input-sm">
                        <label class="text-info">Razon Social</label>
                        <input type="text" name="razon_social" id="razon_social" class="form-control input-sm">
                        <label class="text-info">Email</label>
                        <input type="text" name="email" id="email" class="form-control input-sm">
                        <label class="text-info">telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control input-sm">
                        <label class="text-info">Total a pagar</label>
                        <input type="text" name="total_pagar" id="total_pagar" class="form-control input-sm">
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="send" class="btn btn-primary" >Guardar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
