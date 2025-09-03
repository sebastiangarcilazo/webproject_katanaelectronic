<x-layout>
    <x-slot:title>Mensajes de Contacto</x-slot:title>
    @if(session('success'))
    <div class="alert alert-success mt-3">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger mt-3">{{ session('error') }}</div>
@endif
    <h1 class="mb-4">Mensajes Recibidos</h1>

    <form method="POST" action="{{ route('admin.mensajes.acciones') }}">
        @csrf

       <table class="table table-bordered">
    <thead>
        <tr>
            <th>Seleccionar</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Motivo</th>
            <th>Mensaje</th>
            <th>Archivo</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($mensajes as $mensaje)
            <tr>
                <td>
                    <input type="checkbox" name="seleccionados[]" value="{{ $mensaje->id }}">
                </td>
                <td>{{ $mensaje->nombre }}</td>
                <td>{{ $mensaje->apellido }}</td>
                <td>{{ $mensaje->email }}</td>
                <td>{{ $mensaje->reason }}</td>
                <td>{{ $mensaje->mensaje }}</td>
                <td>
                    @if($mensaje->archivo)
                        <a href="{{ Storage::url($mensaje->archivo) }}" target="_blank">Ver archivo</a>
                    @else
                        Sin archivo
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">No hay mensajes pendientes.</td>
            </tr>
        @endforelse
    </tbody>
</table>

        <div class="d-flex gap-2 mt-3">
            <button type="submit" name="accion" value="responder" class="btn btn-success">Marcar como Respondidos</button>
            <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Eliminar Seleccionados</button>
        </div>
    </form>
</x-layout>