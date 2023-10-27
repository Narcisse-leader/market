<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    // Spécification  du nom de la table
    protected $table = 'Client';

    // Idenfication  des colonnes de remplissage pour s'authentifier
    protected $fillable = ['username', 'password', 'email'];

}
