<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'estado',
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'estado' => 'boolean',
    ];

    public static function rules(): array
    {
        return [
            'nombre'      => 'required|string|max:150',
            'descripcion' => 'nullable|string|max:255',
            'precio'      => 'required|numeric|min:0',
            'estado'      => 'boolean',
        ];
    }

    public static function crear(array $data): self
    {
        return self::create($data);
    }

    public function editar(array $data): bool
    {
        return $this->update($data);
    }

    public function desactivar(): bool
    {
        return $this->update(['estado' => false]);
    }
}
