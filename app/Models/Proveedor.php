<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'ruc',
        'telefono',
        'email',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public static function rules(): array
    {
        return [
            'ruc'      => 'required|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'email'    => 'required|email|max:150',
            'estado'   => 'boolean',
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
