<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creador extends Model
{
    protected $table = 'creadores';

    protected $primaryKey = 'creador_id';

    protected $fillable = ['name_creator', 'lastname_creator', 'release_date_creator', 'description_creator'
    ,'subs_creator','age_creator'];
}