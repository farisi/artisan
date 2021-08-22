<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function expertises(){
        return $this->belongsToMany('\App\Expertise','category_expertise','category_id','expertise_id');
    }
}
