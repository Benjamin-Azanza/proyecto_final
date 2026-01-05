<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'direccion',
        'estado',
        'cedula',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    /* =====================
     * Reglas de validación
     * =====================
     */
    public static function rules(): array
    {
        return [
            'nombres'   => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'email'     => 'required|email',
            'cedula'    => 'required|string|max:20',
            'telefono'  => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'password'  => 'required|string|min:6',
        ];
    }

    /* =====================
     * Comportamiento dominio
     * =====================
     */
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
