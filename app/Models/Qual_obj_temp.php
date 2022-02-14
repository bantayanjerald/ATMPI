<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qual_obj_temp extends Model
{
    use HasFactory;

    protected $table = 'qual_obj_temp';

    public function Qual_obj_goal(){
        return $this->hasMany(Qual_obj_goal::class,'temp_id');
    }

    public function Qual_obj_data(){
        return $this->hasMany(Qual_obj_data::class,'temp_id');
    }
}
