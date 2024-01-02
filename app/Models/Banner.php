<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table ="banner"; 
    public $primaryKey = "ID_banner"; 
    protected $fillable = ['ID_banner', 'LinkPic_banner','Link_banner'];
}
