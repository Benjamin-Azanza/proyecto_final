<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores - Cap & Knit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-light">

<header class="bg-white border-bottom sticky-top py-3 shadow-sm">
    <div class="container">
        <h1 class="h4 mb-0 text-uppercase">Proveedores</h1>
    </div>
</header>

<main class="container py-5">
    @if ($proveedores->count())
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>RUC</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->ruc }}</td>
                            <td>{{ $proveedor->email }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td>{{ $proveedor->estado ? 'Activo' : 'Inactivo' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-5">
            <p class="fs-4">No existen proveedores registrados.</p>
        </div>
    @endif
</main>

<footer class="bg-white border-top py-4">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Cap & Knit.</p>
    </div>
</footer>

</body>
</html>
