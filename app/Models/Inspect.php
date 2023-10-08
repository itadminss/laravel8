<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspect extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inspects';

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
    protected $fillable = ['student_id', 'name', 'position_id', 'result', 'detail'];

    
}
