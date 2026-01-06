<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Bodega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Gestión de Bodega</h1>

    <!-- BOTÓN OBLIGATORIO SEGÚN CU F3.1 -->
    <a href="{{ route('bodegas.create') }}" class="btn btn-primary mb-3">
        Registrar Recepción
    </a>

    @if ($bodegas->count())
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID Usuario</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>N° Producto</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bodegas as $bodega)
                    <tr>
                        <td>{{ $bodega->idUsuario }}</td>
                        <td>{{ $bodega->descripcion }}</td>
                        <td>{{ $bodega->fecha }}</td>
                        <td>{{ $bodega->numProducto }}</td>
                        <td>{{ $bodega->estado ? 'Activo' : 'Inactivo' }}</td>
                        <td>
                            <a href="{{ route('bodegas.edit', $bodega->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No existen registros de bodega.</p>
    @endif
</div>

</body>
</html>
