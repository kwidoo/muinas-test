<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommitteeProtocolComment extends Model
{
    use HasFactory;
    protected $table = 'muinas_committee';
	public $incrementing = false;
	public $timestamps = false;
}
