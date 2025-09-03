<x-layout>
    <x-slot:title>Lista de Clientes</x-slot:title>

    <h1 class="mb-4">Listado de Clientes</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Domicilio</th>
                <th>Fecha de Registro</th>
                <th>Compras</th>
                <th>DNI</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->cliente_id }}</td>
                    <td>{{ $cliente->name_cliente }}</td>
                    <td>{{ $cliente->lastname_cliente }}</td>
                    <td>{{ $cliente->domicilio_cliente }}</td>
                    <td>{{ $cliente->release_date_cliente }}</td>
                    <td>{{ $cliente->compras_cliente }}</td>
                    <td>{{ $cliente->dni_cliente }}</td>
                    <td>{{ $cliente->telefono_cliente }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>