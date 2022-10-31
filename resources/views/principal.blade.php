{{--extension de app, barra de navegación--}}
@extends('layouts.app')

{{--Extension del titulo ubicado en la barra de navegación--}}
@section('titulo')
    ¿Cual es tu CP?
@endsection
{{--Aqui empieza el cuerpo del HTML--}}
@section('contenido')

<div class="md:flex md:justify-center p-10">
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">
        <form action="{{route ('buscar.index')}}" method="get">
            @csrf
            <div class="mb-5">
                <label for="codigo_postal" class="mb-2 block uppercase text-gray-500 font-bold">Coloca el Codigo Postal a buscar: </label>
                <input type="text" id="codigo_postal" name="codigo_postal"  class="border p-3 w-full rounded-lg @error('codigo_postal') border-red-500 @enderror "/>
                @error('codigo_postal')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>

                @enderror
            </div>
            <input type="submit" value="Buscar C.P"
            class="bg-sky-600 hover:bg-sky-700 transition-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"/>
        </form>
    </div>

</div>

@endsection
