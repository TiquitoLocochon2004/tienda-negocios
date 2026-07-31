<?php
require_once __DIR__ . '/../models/Producto.php';
require_once __DIR__ . '/../models/Categoria.php';
require_once __DIR__ . '/../models/Carrito.php';

class ProductoController
{
    public function listar(): void
    {
        $catPerifericos = new Categoria(1, "Periféricos");
        $catPantallas = new Categoria(2, "Pantallas");

        $productos = [
            new Producto(1, "Teclado Mecánico RGB", 45.99, $catPerifericos),
            new Producto(2, "Mouse Gamer Inalámbrico", 25.50, $catPerifericos),
            new Producto(3, "Monitor 24 pulgadas 144Hz", 180.00, $catPantallas),
        ];

        $miCarrito = new Carrito();
        $miCarrito->agregarProducto($productos[0]);
        $miCarrito->agregarProducto($productos[1]);

        $subtotalCarrito = $miCarrito->calcularSubtotal();
        $totalFinal = $miCarrito->calcularTotlFinal();

        require_once __DIR__ . '/../views/productos/listar.php';
    }
}
