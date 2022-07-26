<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    use HasFactory;

    protected $dates = ['data_solicitacao', 'data_quitacao'];

    public $timestamps = false;
    
    public function emprestimos()
    {
        return $this->belongsTo(Emprestimo::class);
    }
}
