<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Cap & Knit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-light">

<header class="bg-white border-bottom sticky-top py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="text-dark text-decoration-none fw-bold fs-4">
            CAP & KNIT
        </a>

        <nav aria-label="Navegación principal">
            <ul class="d-flex gap-4 list-unstyled text-uppercase small mb-0">
                <li>
                    <a href="{{ route('clientes.index') }}"
                       class="text-dark text-decoration-none"
                       aria-current="page">
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="{{ route('productos.index') }}" class="text-dark text-decoration-none">
                        Productos
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main id="main-content" tabindex="-1">
    <section class="container py-5 my-5" aria-labelledby="clientes-titulo">
        <h1 id="clientes-titulo"
            class="display-5 text-center text-uppercase fw-light border-bottom pb-4 mb-5">
            Clientes
        </h1>

        @if ($clientes->count())
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->cedula }}</td>
                                <td>{{ $cliente->nombres }}</td>
                                <td>{{ $cliente->apellidos }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>
                                    {{ $cliente->estado ? 'Activo' : 'Inactivo' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5" role="alert" aria-live="polite">
                <p class="fs-4">No existen clientes registrados.</p>
            </div>
        @endif
    </section>
</main>

<footer class="bg-white border-top py-4">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Cap & Knit.</p>
    </div>
</footer>

</body>
</html>
