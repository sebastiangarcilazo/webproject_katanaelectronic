# Katana Electronic - PC Components Store

## Descripción (Español)
**Katana Electronic** es un sistema web desarrollado en **Laravel** para la gestión y venta de componentes de PC (monitores, hardware, periféricos, etc.).  
Incluye apartados de **productos, noticias, ayuda, contacto** y una completa **galería con buscador**.  
El sistema implementa **roles de cliente y administrador**, cada uno con funcionalidades específicas.

### Funcionalidades principales
#### Cliente
- Registro de usuario e inicio de sesión.  
- Navegación por catálogo de productos con buscador.  
- Visualización de noticias.  
- Envío de formulario de contacto.  
- Añadir productos al carrito de compra.  
- Cerrar sesión.

#### Administrador
- Panel privado de gestión.  
- Listado de clientes registrados y mensajes recibidos.  
- Alta, edición y eliminación de productos.  
- Alta, edición y eliminación de noticias.  
- Cerrar sesión.

### Tecnologías utilizadas
- **Framework**: Laravel 10+  
- **Lenguaje**: PHP 8+  
- **Base de datos**: MySQL/MariaDB  
- **Frontend**: Blade Templates, Bootstrap/TailwindCSS (dependiendo de implementación)  
- **Servidor local**: Laragon / XAMPP / similar  

## Instalación

### Español
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/sebastiangarcilazo/webproject_katanaelectronic.git
   cd webproject_katanaelectronic
   ```
2. Instalar dependencias:
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Copiar el archivo `.env.example` a `.env` y configurar:
   - Conexión a la base de datos (MySQL/MariaDB).  
   - Credenciales de correo (opcional).  
4. Generar la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```
5. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```
6. Iniciar el servidor:
   ```bash
   php artisan serve
   ```
7. Acceder desde el navegador:
   ```
   http://localhost:8000
   ```
---

## Estado del proyecto 
- Proyecto académico con funcionalidades completas de gestión y tienda online.  
- Listo para presentación, demostración y mejora continua.  

## Description (English)
**Katana Electronic** is a **Laravel-based web system** designed for managing and selling PC components (monitors, hardware, peripherals, etc.).  
It features sections for **products, news, help, contact**, and a **gallery with search functionality**.  
The platform implements **client and administrator roles**, each with specific capabilities.

### Main Features
#### Client
- User registration and login.  
- Browse product catalog with search bar.  
- Read latest news.  
- Submit contact form.  
- Add products to shopping cart.  
- Logout.

#### Administrator
- Private management panel.  
- View registered clients and received messages.  
- Add, edit, and delete products.  
- Add, edit, and delete news.  
- Logout.

### Technologies
- **Framework**: Laravel 10+  
- **Language**: PHP 8+  
- **Database**: MySQL/MariaDB  
- **Frontend**: Blade Templates, Bootstrap/TailwindCSS (depending on implementation)  
- **Local server**: Laragon / XAMPP / similar  

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/sebastiangarcilazo/webproject_katanaelectronic.git
   cd webproject_katanaelectronic
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Copy `.env.example` to `.env` and configure:
   - Database connection (MySQL/MariaDB).  
   - Mail credentials (optional).  
4. Generate app key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
6. Start the server:
   ```bash
   php artisan serve
   ```
7. Open in browser:
   ```
   http://localhost:8000
   ```

---

## 📷 Screenshots / Capturas

<p align="center">
  <img src="https://github.com/user-attachments/assets/4348b2bd-7d28-467f-a460-f6c3d3e6e92d" alt="Home" width="800"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/43433f57-1b11-4434-ab13-3ecf6b8551c6" alt="Panel de productos" width="800"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/e7bc7a55-981f-421a-ad66-e8c7482cf652" alt="Panel de noticias" width="800"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/49a0c346-ff21-4fbe-9a0e-03a7c1d475e4" alt="Carrito" width="800"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/f4ba4576-f55d-4d7d-bc82-30dc8b3c5fba" alt="Gestión de clientes" width="800"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/53da0d61-f2e3-4cb1-a492-0fc4cbc47721" alt="Vista adicional" width="800"/>
</p>

---

## Project Status
- Academic project with complete functionalities for management and online store.  
- Ready for presentation, demonstration, and continuous improvement.

---
## Autor / Author
**Sebastián Garcilazo**  
- [sebastian.garcilazo.dev@gmail.com](mailto:sebastian.garcilazo.dev@gmail.com)  
- [LinkedIn](https://www.linkedin.com/)  
- [GitHub](https://github.com/sebastiangarcilazo)  
