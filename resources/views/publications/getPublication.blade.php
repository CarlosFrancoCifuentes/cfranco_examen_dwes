@extends("layouts/plantilla")

@section("title", "Contacto " . $publication->title)

@section("content")
    <h1>PUBLICACION ENCONTRADO</h1>
    <h2>{{$publication->title}}</h2>
    <ul>
        <li>Extracto: {{$publication->extracto}}</li>
        <li>Contenido: {{$publication->contenido}}</li>
        <li>Caducable: {{$publication->caducable}}</li>
        <li>Comentable: {{$publication->comentable}}</li>
    </ul>
    <a href="{{route("publications.index")}}"><h3>Volver a la página de publicacions</h3></a>
    {{-- <a href="{{route("publicacions.edit", $publicacion)}}"><h3>Editar Publicacion</h3></a>
    <a href="{{route("publicacions.destroy", $publicacion)}}"><h3>Borrar Publicacion</h3></a> --}}
@endsection
