<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $dates = ['data_solicitacao', 'data_quitacao'];

    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_cpf', 'cpf');
    }

    public function parcelas()
    {
        return $this->hasMany(Parcela::class);
    }

    public function parcelasPagas(): int
    {
        return $this->parcelas
            ->filter(fn ($parcela) => $parcela->status === "PAGA")
            ->count();
    }

}
