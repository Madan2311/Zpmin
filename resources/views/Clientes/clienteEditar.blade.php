<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-info" id="exampleModalLabel">Editar clientes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form class="" action="/Fcliente/{{ $cliente->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
                    <label class="text-info">Identificación</label>
                    <input type="text" name="" id="identificacion" class="form-control input-sm"  disabled="true">
                    <label class="text-info">Razon Social</label>
                    <input type="text" name="" id="razon_social" value="{{ $cliente->razon_social }}" class="form-control input-sm">
                    <label class="text-info">Email</label>
                    <input type="text" name="" id="email" class="form-control input-sm">
                    <label class="text-info">telefono</label>
                    <input type="text" name="" id="telefono" class="form-control input-sm">
                    <label class="text-info">Total a pagar</label>
                    <input type="text" name="" id="total_pagar" class="form-control input-sm">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
        </div>
      </div>


        {{--  <div class="form-group">
          <label for="cedula">Cedula</label>
          <input class="form-control" type="text" name="cedula" id="cedula" value="{{$cliente->cedula}}" placeholder="Ejemplo Manzana" required />
        </div>
       <div class="form-group">
         <label for="dir">Direccion</label>
         <input class="form-control" type="text" name="dir" id="dir" value="{{$cliente->dir}}" placeholder="Calle siempre viva" required />
       </div>
       <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="{{$cliente->email}}" placeholder="Calle siempre viva" required />
      </div>
      <div class="form-group">
        <label for="razon_social">Razon social</label>
        <input class="form-control" type="text" name="razon_social" id="razon_social" value="{{$cliente->razon_social}}" placeholder="Calle siempre viva" required />
      </div>
       <div class="form-group">
        <label for="tel">Telefono</label>
        <input class="form-control" type="text" name="tel" id="tel" value="{{$cliente->tel}}" placeholder="1234567" required />
      </div>
      <div class="form-group">
        <label for="total_pagar">Total a pagar</label>
        <input class="form-control" type="text" name="total_pagar" id="total_pagar" value="{{$cliente->total_pagar}}" placeholder="Calle siempre viva" required />
      </div>

        <button type="submit" name="send" class="btn btn-warning">Actualizar</button>
        <br/>
      </form>  --}}
