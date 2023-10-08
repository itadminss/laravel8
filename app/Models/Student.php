<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'date', 'gender', 'class'];


    public function hchk(){
        $this->hasMany(Healcheck::class,'student_id');
    }
    public function position(){
        $this->hasOne(Position::class,'position_id');
    }
    public function inspect(){
        $this->hasOne(Inpsect::class,'inspect_id');
    }
    
}
