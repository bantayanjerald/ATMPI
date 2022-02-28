<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qual_obj_temp extends Model
{
    use HasFactory;

    protected $table = 'qual_obj_temp';
    protected $fillable = ['qual_category','qual_order','qual_objective','qual_um','qual_definition','qual_formula','qual_scope','qual_source','qual_type','deptid','department','qual_year','qual_fail'];

    public $timestamps = false;

    public function Qual_obj_goal(){
        return $this->hasMany(Qual_obj_goal::class,'temp_id');
    }

    public function Qual_obj_data(){
        return $this->hasMany(Qual_obj_data::class,'temp_id');
    }
}
