@extends('/plantilla/plantilla')

@section('titulo','Listado de Productos')

@section('contenido')
<div class="container">
    <div>
        <h1>Inspirate</h1>
    </div>
    <h2>Listado de Productos</h2>
    <ul>
        @if ($productos)
        @foreach($productos as $producto)
        <li>
            <a href="{{ route('productos.show', $producto->id) }}">{{ $producto->titulo }}</a>
            <p>{{ $producto->descripcion }}</p>
        </li>
        @endforeach           
        @else
            
        @endif

    </ul>
</div>
@endsection
