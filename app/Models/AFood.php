<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AFood extends Model
{
    use HasFactory;
    protected $table = 'a_food';
    protected $primaryKey = 'id';


    public function MFoodCategory(){
        return $this->belongsTo(MFoodCategory::class, 'id_m_food_category');
    }

}
