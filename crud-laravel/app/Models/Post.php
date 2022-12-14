<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//As migrations são na verdade uma maneira de criar as tabelas do banco de dados usando o laravel.

class Post extends Model
{
    // fillable é como se fosse uma segurança do model para com o banco de dados,
    // caso você tente passar algo para o banco que não esteja no fillable o laravel irá rejeitar.
    protected $fillable = [
        'title', 'content', 'author'
    ];
    use HasFactory;
}
