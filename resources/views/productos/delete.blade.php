<?php
/** @var \App\Models\producto $producto */
?>
<x-layout>
    <x-slot:title> Detalle del Producto {{ $producto->title }} </x-slot:title>

    <h1 class="mb-3" >Confirmacion para eliminar {{ $producto->title }}</h1>

    <p class="mb-1">Estas a punto de <b>eliminar</b>  la producto <b>{{ $producto->title }}</b> </p>

    <p>¿Quieres proceder con la eliminacion?</p>

    <form
        action="{{ route('productos.destroy', ['id' => $producto->producto_id]) }}"
        class="mb-3"
        method="post"
    >
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger" > Sì, eliminar {{ $producto->title }}</button>

    </form>

    {{-- TODO: agregar la imagen de la Imagen del producto --}}
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
