# Tienda de Negocios - Entrega 1 (PHP Puro & MVC Manual)

Proyecto correspondiente al módulo de desarrollo en PHP puro, aplicando Programación Orientada a Objetos (POO) y una arquitectura Modelo-Vista-Controlador (MVC) manual, sin utilizar frameworks.

---

## 🛠️ 1. Instrucciones de Instalación del Entorno
Para ejecutar este proyecto de manera local, sigue los pasos a continuación:

1. **Servidor Local y PHP:**
   - Asegúrate de tener instalado **XAMPP** (con Apache y PHP activos).
   - Clona o copia la carpeta del proyecto dentro del directorio raíz del servidor local: `C:\xampp\htdocs\tienda-php`.
   - Inicia el servicio de **Apache** desde el Panel de Control de XAMPP.
2. **Composer:**
   - Asegúrate de tener Composer instalado y verificado en tu terminal mediante el comando `composer -V`.
3. **Ejecución:**
   - Abre tu navegador web e ingresa a la siguiente URL: `http://localhost/tienda-php/`

---

## 🏗️ Explicación del Diseño MVC Elegido
La aplicación implementa una separación estricta de responsabilidades mediante una arquitectura MVC manual:

- **`models/` (Modelo):** Contiene las clases de dominio (`Producto`, `Categoria`, `Usuario`, `Carrito`). Gestiona la lógica de datos y las operaciones internas (como cálculos de subtotales mediante bucles y condicionales).
- **`controllers/` (Controlador):** Actúa como intermediario. Recibe la petición inicial, solicita los datos al Modelo y se los entrega a la Vista para su renderizado.
- **`views/` (Vista):** Contiene las interfaces visuales estructuradas con HTML5 y PHP puro para mostrar la información al usuario en el navegador.
- **`index.php` (Enrutador Frontal):** Punto de entrada único que centraliza y redirige todas las peticiones hacia el controlador correspondiente.

### Flujo de Ejecución:
`Navegador del Cliente` ➡️ `index.php` ➡️ `Controlador` ➡️ `Modelo` ➡️ `Controlador` ➡️ `Vista HTML`