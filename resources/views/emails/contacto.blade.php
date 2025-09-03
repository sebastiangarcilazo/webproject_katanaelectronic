<x-mail::message>
# Nuevo mensaje de contacto

**Nombre:** {{ $datos['nombre'] }}  
**Apellido:** {{ $datos['apellido'] }}  
**Email:** {{ $datos['email'] }}  
**Teléfono:** {{ $datos['telefono'] }}  
**Motivo:** {{ $datos['reason'] }}

**Mensaje:**  
{{ $datos['mensaje'] }}

<x-mail::button :url="'mailto:' . $datos['email']">
Responder al contacto
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>