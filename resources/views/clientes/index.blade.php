<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Gestión de Clientes</h1>

    <!-- BOTÓN OBLIGATORIO SEGÚN CU F6.1 -->
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">
        Crear Cliente
    </a>

    @if ($clientes->count())
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cédula</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->cedula }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->estado ? 'Activo' : 'Inactivo' }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No existen clientes registrados.</p>
    @endif
</div>

</body>
</html>
