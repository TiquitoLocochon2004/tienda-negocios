<?php
/**
 * @var array $productos
 * @var float $subtotalCarrito
 * @var float $totalFinal
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Negocios - Catálogo</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f8f9fa; color: #333; }
        h1, h2 { color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        th, td { padding: 14px; border: 1px solid #e9ecef; text-align: left; }
        th { background-color: #343a40; color: white; }
        .card { background: white; padding: 20px; margin-top: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <h1>Tienda de Negocios 🛒</h1>
    <p>Entrega 1: Fundamentos de PHP y diseño de la aplicación</p>
    
    <h2>Catálogo de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Categoría</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <!-- Bucle foreach para renderizar los datos del modelo en la vista -->
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto->id; ?></td>
                    <td><?php echo htmlspecialchars($producto->nombre); ?></td>
                    <td><?php echo htmlspecialchars($producto->categoria->nombre); ?></td>
                    <td>$<?php echo number_format($producto->precio, 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="card">
        <h2>Resumen del Carrito de Compras</h2>
        <p><strong>Subtotal de productos:</strong> $<?php echo number_format($subtotalCarrito, 2); ?></p>
        <p><strong>Total con envío aplicado (Condicional):</strong> $<?php echo number_format($totalFinal, 2); ?></p>
    </div>
</body>
</html>