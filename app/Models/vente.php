<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    use HasFactory;
      // Spécification du nom de la table
    protected $table = 'Client';

    //  Idenfication des colonnes de renplissage pour s'authentifiers
    protected $fillable = ['username', 'password', 'email'];

}
