<x-layout>
    <x-slot:title>{{ $noticia->title_noticia }}</x-slot:title>

    <h1 class="mb-2">{{ $noticia->title_noticia }}</h1>
    <h5 class="text-muted mb-3">{{ $noticia->subtitle_noticia }}</h5>
    <p class="text-secondary">Publicado el {{ \Carbon\Carbon::parse($noticia->release_date_noticia)->format('d/m/Y') }}</p>

    <div class="mb-4">
        {{ $noticia->descripcion_noticia }}
    </div>

    <div class="text-muted small mb-4">Visitas: {{ number_format($noticia->visitantes_noticia) }}</div>

    <a href="{{ route('noticias.index') }}" class="btn btn-secondary">← Volver al listado</a>
</x-layout>