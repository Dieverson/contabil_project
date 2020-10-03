<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plano_de_contas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_plano_de_conta'

   ];
}
