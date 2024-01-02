<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ="category"; 
    public $primaryKey = "ID_CG "; 
    protected $fillable = ['ID_CG', 'Name_CG','Type_PG','Link_CG'];
}
