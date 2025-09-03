<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\producto[] $productos */
?>

<x-layout>
    <x-slot:title>Lista de productos</x-slot:title>

    <h1 class="mb-4">Listado de productos</h1>

    {{-- Formulario de búsqueda --}}
    <form method="GET" action="{{ route('productos.index') }}" class="mb-4">
        <div class="input-group" style="max-width: 400px;">
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por nombre..."
                value="{{ request('search') }}"
            >
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    @auth
        @if (Auth::user()->role === 'admin')
            <p class="mb-3">
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Añadir un nuevo producto</a>
            </p>
        @endif
    @endauth

    <table class="table table-bordered table-striped">
    <thead>
        <tr>
        
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Fecha de Salida</th>
            <th>Descripción</th>
            
            <th>Acción</th> {{-- Nueva columna --}}
        </tr>
    </thead>
    <tbody>
    @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->producto_id }}</td>
             <td>
            @if($producto->imagen)
                <img src="{{ asset('productos/' . $producto->imagen) }}" alt="Imagen de {{ $producto->title }}" width="60">
                @else
                <span class="text-muted">Sin imagen</span>
            @endif
            </td>
            <td>{{ $producto->title }}</td>
            <td>{{ $producto->price }}</td>
            <td>{{ $producto->release_date }}</td>
            <td>
                <div class="d-flex gap-2">
                    <a href="{{ route('productos.view', ['id' => $producto->producto_id]) }}" class="btn btn-primary">Ver</a>
                </div>
            </td>
            <td>
                @auth
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('productos.edit', ['id' => $producto->producto_id]) }}" class="btn btn-secondary">Editar</a>
                        <a href="{{ route('productos.delete', ['id' => $producto->producto_id]) }}" class="btn btn-danger">Eliminar</a>
                    @endif
                @endauth
                @auth
                    @if(Auth::user()->role !== 'admin')
                        <form action="{{ route('cart.add', $producto->producto_id) }}" method="POST" class="d-flex align-items-center gap-2">
                            @csrf
                            <input type="number" name="cantidad" value="1" min="1" class="form-control" style="width: 70px;">
                            <button type="submit" class="btn btn-success btn-sm">Agregar</button>
                        </form>
                    @endif
                @else
                    <p>Logueate para comprar</p>
                @endauth
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</x-layout>