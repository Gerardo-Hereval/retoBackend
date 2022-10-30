@extends('layouts.app')

@section('titulo')
    ¿Cual es tu CP?
@endsection

@section('contenido')

<div class="md:flex md:justify-center p-10">
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">
        <form action="{{route ('api')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="cp" class="mb-2 block uppercase text-gray-500 font-bold">Coloca el Codigo Postal a buscar: </label>
                <input type="text" id="cp" name="cp"  class="border p-3 w-full rounded-lg @error('cp') border-red-500 @enderror "/>
                @error('cp')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>

                @enderror
            </div>
            <input type="submit" value="Buscar C.P"
            class="bg-sky-600 hover:bg-sky-700 transition-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"/>
        </form>
    </div>

</div>

@endsection
