@include('Layout.layout')


@if (session('status'))
    <div id="status" class="alert {{session('status')}}">
      {{ session('message') }}
    </div>
  @endif
<div class="row">
	<div class="col-sm-12">
	<h2 class="text-info">Clientes</h2>
		<table class="table table-hover table-condensed table-bordered">
			<button class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregar">
            Agregar nuevo
				<span class="fa fa-plus"></span>
			</button>
            <br>
            <br>
			<thead class="p-3 mb-2 bg-secondary text-white">
                <td>Identificación</td>
                <td>Razon social</td>
				<td>Email</td>
                <td>Telefono</td>
                <td>Total a pagar</td>
				<td>Editar</td>
				<td>Eliminar</td>
            </thead>
                <tbody>
                @foreach ($cliente as $item)
                <tr>
                    <td>{{ $item->identificacion }}</td>
                    <td>{{ $item->razon_social }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->total_pagar }}</td>

                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#ModalEditar"><i class="fas fa-user-edit"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
                    </td>
                </tr>
                @endforeach
                </tbody>
		</table>
	</div>
</div>
<!-- Modal agregar -->
   @include('Form.Clientes.clienteAgregar');
<!-- Modal agregar -->
    @include('Form.Clientes.clienteEditar');

