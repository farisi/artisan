<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function categories(){
        return $this->belongsToMany('\App\Category','category_expertise','expertise_id','category_id');
    }

    public function artisans(){
        return $this->belongsToMany('\App\Artisan','expertise_artisans','expertise_id','artisan_id');
    }
}
