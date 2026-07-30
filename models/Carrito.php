<?php
require_once 'Producto.php';

class Carrito
{
    const COSTO_ENVIO_BASE = 5.00;

    public array $productos = [];

    public function agregarProducto (Producto $producto): void
    {
        $this->productos[] = $producto;
    }

    public function calcularSubtotal(): float
    {
        $subtotal = 0.0;
        foreach ($this->productos as $prod) {
            $subtotal += $prod->precio;
        }
        return $subtotal;
    }

    public function calcularTotlFinal(): float
    {
        $subtotal = $this->calcularSubtotal();

        if ($subtotal > 100.00) {
            return $subtotal;
        } else {
            return $subtotal + self::COSTO_ENVIO_BASE;
        }
        
    }
}