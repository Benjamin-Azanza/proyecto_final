<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table = 'bodegas';

    protected $fillable = [
        'user_id',
        'descripcion',
        'fecha',
        'num_producto',
        'estado',
    ];

    protected $casts = [
        'fecha' => 'date',
        'estado' => 'boolean',
    ];

    public static function rules(): array
    {
        return [
            'user_id'      => 'required|integer',
            'descripcion'  => 'nullable|string|max:255',
            'fecha'        => 'required|date',
            'num_producto' => 'required|integer|min:1',
            'estado'       => 'boolean',
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
