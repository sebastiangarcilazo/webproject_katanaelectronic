
<x-layout>
    <x-slot:title>Contacto</x-slot:title>
    <h1 class="mb-4"> Contacto </h1>
<main>
  <h1 id="title">Envíanos aquí su mensaje</h1>
  <section>
    <div class="container mt-5">
      <h2>Formulario de Contacto</h2>
       @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
      @endif
      <form action="{{ route('contacto.enviar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
          </div>
          <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="+54 9 11 XXXX-XXXX" required>
        </div>
        <div class="mb-3">
          <label for="reason" class="form-label">Motivo del Contacto</label>
          <select class="form-select" id="reason" name= "reason" required>
            <option selected disabled value="">Seleccione una opción</option>
            <option value="consulta">Consulta</option>
            <option value="soporte">Soporte</option>
            <option value="comentarios">Comentarios</option>
            <option value="otros">Otros</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."
            required></textarea>
        </div>
        <div>
          <label for="alt" class="form-label">Ingrese un Nombre alternativo para su imagen</label>
          <input id="alt" name="alt" placeholder="Texto alternativo" type="text" class="form-control">
        </div>
        <div>
          <label for="archivo" class="form-label">Cargar Archivo</label>
          <input id="archivo" name="archivo" type="file" accept="image/*" class="form-control">
        </div>
        <div>
          <br>
          <input type="submit" value="Cargar" class="btn btn-primary form-label">
        </div>
      </form>
      <h2 id="cancel-buy">Si te arrepentiste de una compra. podés pedir la cancelacion enviando un reclamo a este
        formulario</h2>
    </div>
  </section>
  <aside class="d-sm-none d-md-block d-none d-sm-block">
    <div class="container">
      <h3 class="text-center" id="asidetitle">Productos Populares</h3>
      <img src="{{ asset('productos/geforcertc4060.png') }}" alt="rx6750xt" class="img-fluid">
      <h4>
        Placa de Video MSI GeForce RTX 4060 8GB GDDR6 Ventus 2X Black OC
      </h4>
      <p class="price">$455.200</p>
      <img src="{{ asset('productos/ryzen7.png') }}" alt="ryzen7" class="img-fluid">
      <h4>
        Procesador AMD Ryzen 7 5700G 4.6GHz Turbo + Wraith Stealth Cooler
      </h4>
      <p class="price">255.250</p>
      <img src="{{ asset('productos/ssdadata.png') }}" alt="ssdadata4tb" class="img-fluid">
      <h4>
        Disco Solido SSD M.2 ADATA 4TB Legend 960 MAX 7400MB/s NVMe PCIe Gen4
      </h4>
      <p class="price">$433.000</p>
    </div>
  </aside>
</main>

</x-layout>

