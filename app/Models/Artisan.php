<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $filled = ['firstname','lastname','mobile'];

    public function expertises(){
        return $this->belongsToMany('\App\Expertise','expertise_artisans','artisan_id','expertise_id');
    }
}
