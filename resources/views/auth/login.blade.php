@extends('layouts.app')

@section('titulo')
Inicia Sesion en SociaLink
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
<div class="md:w-4/12">
<img src="{{ asset('img/logo.jpg')}}"  alt="imagen logotipo">
</div>
<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
    <form method="POST" action="{{ route('login')}}" >
        @csrf
        @if (session('mensaje'))
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
        @endif
        
        <div class="mb-5">
            <label for="email" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
               Email
            </label>
            <input type="email"
             id="email"
             name="email"
            
             placeholder="Tu email"
             class="border p-3 w-full rounded-lg @error('email') border-red-500  @enderror" value={{ old('email') }} >
             @error('email')
             <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
         @enderror
        </div>
        <div class="mb-5">
            <label for="password" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
               Password
            </label>
            <input type="password"
             id="password"
             name="password"
             placeholder="Tu password"
             class="border p-3 w-full rounded-lg @error('password') border-red-500  @enderror" >
             @error('password')
             <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
         @enderror
        </div>
       <div>
        <input type="checkbox" name="remember">
        <label for="" class=" text-gray-500 text-sm">Mantener la sesion abierta</label>
       </div>
        <input type="submit" value="Iniciar sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

    </form>
</div>
</div>
@endsection