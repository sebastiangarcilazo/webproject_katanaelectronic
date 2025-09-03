<x-layout>
    <x-slot:title>Listado de usuarios</x-slot:title>

    <h1 class="mb-4">Usuarios registrados</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->role }}</td>
                <td>
                    <a href="{{ route('usuarios.show', ['id' => $usuario->id]) }}" class="btn btn-primary">Ver Detalle</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>