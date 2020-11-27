<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasApplicationRoundPackage extends Model
{
    use HasFactory;

    protected $table = 'muinas_application_round_package';
    public $timestamps = false;
    
    protected $guarded = [];
}
