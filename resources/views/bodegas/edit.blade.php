<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro de Bodega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Editar Registro de Bodega</h1>

    <form action="{{ route('bodegas.update', $bodega->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">ID Usuario</label>
            <input type="number"
                   name="idUsuario"
                   class="form-control"
                   value="{{ $bodega->idUsuario }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" required>{{ $bodega->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date"
                   name="fecha"
                   class="form-control"
                   value="{{ $bodega->fecha }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Número de Producto</label>
            <input type="number"
                   name="numProducto"
                   class="form-control"
                   value="{{ $bodega->numProducto }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="1" {{ $bodega->estado ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ !$bodega->estado ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('bodegas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
