<x-layout>
    <x-slot:title>Inicio</x-slot:title>
    <main>
    <h1 id="title">
        Katana Electronic
    </h1>
    <h2>OFERTAS</h2>
    <div class="slider" class="container">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="slider1/publicidad1.jpg" alt="Imagen 1" class="img-fluid">
            </div>
            <div class="slide">
                <img src="slider1/publicidad2.jpg" alt="Imagen 2" class="img-fluid">
            </div>
            <div class="slide">
                <img src="slider1/publicidad3.jpg" alt="Imagen 3" class="img-fluid">
            </div>
            <div class="slide">
                <img src="slider1/publicidad4.jpg" alt="Imagen 4" class="img-fluid">
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    <h2>MEJORES PRECIOS DEL MERCADO</h2>
    <section>
        <p><br><br></p>
        <h3>NOVEDADES</h3>
       <article class="container">
    <hr>
    <div class="image-row">
        <div class="image-item">
            <img src="{{ asset('productos/rx6750xt.png') }}" alt="rx6750xt" class="img-fluid">
            <h4>
                Placa de Video XFX Radeon RX 6750 XT ULTRA 12GB GDDR6 SPEEDSTER
            </h4>
            <p class="price">$680.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/intelcore.png') }}" alt="intelcorei5 14400f" class="img-fluid">
            <h4>
                Procesador Intel Core i5 14400F 4.7GHz Turbo Socket 1700 Raptor Lake
            </h4>
            <p class="price">$330.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/monitorlg.png') }}" alt="monitorlg" class="img-fluid">
            <h4>
                Monitor LG 24'' 24MK430H-B 75Hz IPS Full HD FreeSync HDMI
            </h4>
            <p class="price">$120.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/lenovolegion.png') }}" alt="lenovolegion" class="img-fluid">
            <h4>
                Notebook Gamer Lenovo Legion 5 15ACH6A WQHD 2K 15.6" 16GB (2x8GB)
            </h4>
            <p class="price">$1.500.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/fuentedepoder750.png') }}" alt="fuentedepoder" class="img-fluid">
            <h4>
                Fuente Cougar 750W 80 Plus Gold GEC750
            </h4>
            <p class="price">$149.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/ramtforce.png') }}" alt="ramtforce" class="img-fluid">
            <h4>
                Memoria Team DDR5 32GB (2x16GB) 6400MHz T-Force Delta RGB
            </h4>
            <p class="price">$172.000</p>
        </div>
        <div class="image-item">
            <img src="{{ asset('productos/gabinete1.png') }}" alt="gabinete" class="img-fluid">
            <h4>
                Gabinete Antec NX292 RGB MESH Black 3x120mm RGB Fans
            </h4>
            <p class="price">$81.000</p>
        </div>
    </div>
</article>
 </section>
</main>
</x-layout>
