<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogs extends Model
{
    protected $fillable = ['title','description','price','image'];
    
    protected $table = 'catalogs';

}
