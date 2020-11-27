<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasObject extends Model
{
    use HasFactory;

    protected $table = 'muinas_muinasobject';
	public $incrementing = false;
	public $timestamps = false;
}
