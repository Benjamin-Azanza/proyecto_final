<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Gestión de Proveedores</h1>

    <!-- BOTÓN OBLIGATORIO SEGÚN CU F1.1 -->
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">
        Crear Proveedor
    </a>

    @if ($proveedores->count())
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>RUC</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->ruc }}</td>
                        <td>{{ $proveedor->email }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>{{ $proveedor->estado ? 'Activo' : 'Inactivo' }}</td>
                        <td>
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No existen proveedores registrados.</p>
    @endif
</div>

</body>
</html>
