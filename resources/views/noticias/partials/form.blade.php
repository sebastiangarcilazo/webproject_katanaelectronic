@csrf

@if(isset($noticia))
    @method('PUT')
@endif

<div class="mb-3">
    <label for="title_noticia" class="form-label">Título</label>
    <input type="text" name="title_noticia" class="form-control" value="{{ old('title_noticia', $noticia->title_noticia ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="subtitle_noticia" class="form-label">Subtítulo</label>
    <input type="text" name="subtitle_noticia" class="form-control" value="{{ old('subtitle_noticia', $noticia->subtitle_noticia ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="release_date_noticia" class="form-label">Fecha de publicación</label>
    <input type="date" name="release_date_noticia" class="form-control" value="{{ old('release_date_noticia', $noticia->release_date_noticia ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="descripcion_noticia" class="form-label">Descripción</label>
    <textarea name="descripcion_noticia" class="form-control" rows="5" required>{{ old('descripcion_noticia', $noticia->descripcion_noticia ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="visitantes_noticia" class="form-label">Visitantes</label>
    <input type="number" name="visitantes_noticia" class="form-control" value="{{ old('visitantes_noticia', $noticia->visitantes_noticia ?? 0) }}" required>
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($noticia) ? 'Actualizar Noticia' : 'Crear Noticia' }}
</button>