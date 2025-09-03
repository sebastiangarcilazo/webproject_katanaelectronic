<x-layout>
    <x-slot:title>Detalle de usuario</x-slot:title>

    <h1 class="mb-4">Detalle de usuario</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $usuario->id }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $usuario->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $usuario->email }}</li>
        <li class="list-group-item"><strong>Rol:</strong> {{ $usuario->role }}</li>
        <li class="list-group-item"><strong>Fecha de creación:</strong> {{ $usuario->created_at }}</li>
    </ul>

    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
</x-layout>