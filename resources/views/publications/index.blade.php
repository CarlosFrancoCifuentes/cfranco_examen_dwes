@extends("layouts/plantilla")

@section("title", "Publicaciones")

@section("content")
    <h1>PUBLICACIONES</h1>
    <a href="{{route("publications.create")}}"><h3>Crear Publicacion</h3></a><br>
    @foreach ($publications as $publication)
        <h3>{{$publication->titulo}}</h3>
        <ul>
            <li>{{$publication->extracto}}</li>
            <li>{{$publication->contenido}}</li>
            <li>
                Más información: <a href="{{route("publications.publication", $publication->id)}}">{{$publication->titulo}}</a>
            </li>
        </ul>
    @endforeach
@endsection
