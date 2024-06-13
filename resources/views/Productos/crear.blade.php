@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => 'productos.store']) !!}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre del producto') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre del producto..']) !!}
</div>

<div class="form-group">
    {!! Form::label('precio', 'Precio') !!}
    {!! Form::text('precio', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Precio..']) !!}
</div>

<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Cantidad..']) !!}
</div>


<!-- Agrega más campos aquí si es necesario -->

<button type="submit" class="btn btn-primary">Guardar producto</button>
{!! Form::close() !!}
<hr>

<script>
    // Evento para manejar el envío del formulario
    $(document).ready(function() {
        $('#crearProductosForm').on('submit', function(event) {
            event.preventDefault(); // Evita que se envíe el formulario normalmente
            var formData = $(this).serialize(); // Serializa los datos del formulario
            $.post("{{ route('productos.store') }}", formData, function(response) {
                // Aquí puedes manejar la respuesta del servidor, como mostrar un mensaje de éxito o actualizar la tabla de clientes
                console.log(response);
                $('#crearClienteModal').modal('hide'); // Cierra la ventana modal después de guardar el cliente
                location.reload();
            });
        });
    });
</script>