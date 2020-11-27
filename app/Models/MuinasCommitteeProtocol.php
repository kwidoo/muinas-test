<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommitteeProtocol extends Model
{
    use HasFactory;
    protected $table = 'muinas_committee_protocol';
    public $timestamps = false;
    
    public function parent() 
    {
        return $this->belongsTo(MuinasCommittee::class, 'committee_id', 'id');
    }

    public function members()
    {
        return $this->hasMany(MuinasCommitteeMember::class, 'protocol_id', 'id');
    }

    public function agenda()
    {
        return $this->hasMany(MuinasCommitteeProtocolAgenda::class, 'protocol_id', 'id');
    }



}
