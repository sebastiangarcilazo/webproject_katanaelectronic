<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
     protected $table = 'noticias';

    protected $primaryKey = 'noticia_id';

    protected $fillable = ['title_noticia', 'subtitle_noticia', 'release_date_noticia', 'descripcion_noticia'
    ,'visitantes_noticia'];
}