<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    protected $table = 'Partido';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = false;
}
