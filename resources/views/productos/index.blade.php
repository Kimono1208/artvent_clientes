@extends('/plantilla/plantilla')

@section('titulo','acerca de')
<style>
    .gallery-item {
        width: 100%;
        height: 7.7rem;
        object-fit: cover;
    }
    #gallery_button {
        display: flex;
        gap: .5rem;
        flex-wrap: wrap
    }
    #gallery_button > button{
        background-color: #91FE71;
        font-style: none;
        border: none;
        border-radius: 1rem;
        padding: 1rem;
        margin: 0 .4rem 0 0;
    }
    #gallery_button > button:hover{
        background-color: #2b4b21;
    }
</style>
<section id="gallery" class="gallery">
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Galeria</h2>
        <p>Checa nuestros estilos</p>
      </div>
    <h2>Listado de Productos</h2>
    <ul>
        @foreach($productos as $producto)
        <li>
            <a href="{{ route('productos.show', $producto->id) }}">{{ $producto->titulo }}</a>
            <p>{{ $producto->descripcion }}</p>
        </li>
        @endforeach
        
    </ul>
</div>
@section('contenido')
@endsection
