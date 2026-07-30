<?php
require_once 'Categoria.php';

class Producto
{
    public int $id;
    public string $nombre;
    public float $precio;
    public Categoria $categoria;

    public function __construct(int $id, string $nombre, float $precio, Categoria $categoria)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }
}
