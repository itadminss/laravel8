<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Healcheck extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'healchecks';

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
    protected $fillable = ['student_id', 'date', 'week', 'result', 'detail'];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

}
