<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_grupos extends Model
{
    protected $fillable = [
        'numero_da_conta',
        'nome_da_conta',
        'grupos_idgrupos',
        'natureza_idnatureza'
   ];
}
