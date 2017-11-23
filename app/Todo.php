<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $primaryKey= 'id';
    public $timestamps = false;
	protected $table = 'todos';

    protected $fillable = [
        'kebutuhan'
    ];

    protected $hidden = [
        'id'
    ];
}
