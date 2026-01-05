<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega / Recepciones - Cap & Knit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-light">

<header class="bg-white border-bottom sticky-top py-3 shadow-sm">
    <div class="container">
        <h1 class="h4 mb-0 text-uppercase">Recepciones de Bodega</h1>
    </div>
</header>

<main class="container py-5">
    @if ($bodegas->count())
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Usuario</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Cantidad Productos</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bodegas as $bodega)
                        <tr>
                            <td>{{ $bodega->user_id }}</td>
                            <td>{{ $bodega->descripcion }}</td>
                            <td>{{ $bodega->fecha->format('d/m/Y') }}</td>
                            <td>{{ $bodega->num_producto }}</td>
                            <td>{{ $bodega->estado ? 'Activo' : 'Inactivo' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-5">
            <p class="fs-4">No existen registros de recepción en bodega.</p>
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
