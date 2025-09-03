<x-layout>
    <x-slot:title>Crear Noticia</x-slot:title>

    <h1>Nueva Noticia</h1>

    <form method="POST" action="{{ route('noticias.store') }}">
        @csrf

        @include('noticias.partials.form', ['noticia' => null])
        <a href="{{ route('noticias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layout>