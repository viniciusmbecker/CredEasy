<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class Cliente extends Model implements Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'cpf';
    protected $keyType = 'string';

    public $timestamps = false;

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    public function getAuthIdentifierName()
    {
        return 'cpf';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['cpf'];
    }

    public function getAuthPassword()
    {
        return $this->attributes['senha'];
    }

    public function getRememberToken()
    {
        return '';
    }

    public function setRememberToken($value)
    {
        
    }

    public function getRememberTokenName()
    {
        return '';
    }

}
