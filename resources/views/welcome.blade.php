<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal - Cap & Knit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-5 text-center">Menú Principal</h1>

    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <a href="{{ route('productos.index') }}" class="btn btn-primary w-100 py-4">
                Gestión de Productos
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary w-100 py-4">
                Gestión de Clientes
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('proveedores.index') }}" class="btn btn-success w-100 py-4">
                Gestión de Proveedores
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('bodegas.index') }}" class="btn btn-warning w-100 py-4">
                Gestión de Bodega
            </a>
        </div>

    </div>
</div>

</body>
</html>
