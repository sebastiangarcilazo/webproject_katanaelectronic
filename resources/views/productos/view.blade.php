<?php
/** @var \App\Models\producto $producto */
?>
<x-layout>
    <x-slot:title> Detalle del producto {{ $producto->title }} </x-slot:title>

    <h1 class="mb-3" >{{ $producto->title }}</h1>
   @if($producto->imagen)
    <div class="mb-3">
        <img src="{{ asset('imagenes_productos/' . $producto->imagen) }}" alt="Imagen de {{ $producto->title }}" width="300">
    </div>
@else
    <p class="text-muted">Este producto no tiene imagen.</p>
@endif
    <dl>
        <dt>Precio:</dt>
        <dd>${{ $producto->price }}</dd>
        <dt>Fecha de Salida</dt>
        <dd>{{ $producto->release_date }}</dd>
    </dl>

    <hr class="mb-3">

    <h2 class="mb-3">Descripción del producto</h2>
    <div>{{ $producto->description }}</div>
</x-layout>
