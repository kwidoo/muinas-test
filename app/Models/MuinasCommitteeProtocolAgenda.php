<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommitteeProtocolAgenda extends Model
{
    use HasFactory;
    protected $table = 'muinas_committee_protocol_agenda';
	public $incrementing = false;
	public $timestamps = false;
}
