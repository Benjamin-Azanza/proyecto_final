<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombres</label>
            <input type="text"
                   name="nombres"
                   class="form-control"
                   value="{{ $cliente->nombres }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text"
                   name="apellidos"
                   class="form-control"
                   value="{{ $cliente->apellidos }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cédula</label>
            <input type="text"
                   name="cedula"
                   class="form-control"
                   value="{{ $cliente->cedula }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ $cliente->email }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text"
                   name="telefono"
                   class="form-control"
                   value="{{ $cliente->telefono }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text"
                   name="direccion"
                   class="form-control"
                   value="{{ $cliente->direccion }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="1" {{ $cliente->estado ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ !$cliente->estado ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
