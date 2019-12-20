<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'Facultad';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = false;
}
