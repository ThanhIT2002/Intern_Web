<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="product"; 
    public $primaryKey = "ID_PD ";
    public $timestamps = true;  
    protected $fillable = ['ID_PD','Name_PD','ID_CG', 'Price_created','Price_updated','Created_PD','Updated_PD','Describe_PD','Link_PD','Quantity_PD','Quantity_sold'];
    protected $attributes=['Price_updated'=>0,'Quantity_sold'=>0];

}
