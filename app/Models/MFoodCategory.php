<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MFoodCategory extends Model
{
    use HasFactory;
    protected $table = 'm_food_category';
    protected $primaryKey = 'id';

    public function AFood(){
        return $this->hasMany(AFood::class, 'id_m_food_category');
    }

}
