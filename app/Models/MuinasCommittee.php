<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommittee extends Model
{
    use HasFactory;
    protected $table = 'muinas_committee';
    public $timestamps = false;
    
    public function document_type()
    {
        return $this->hasMany(MuinasCommitteeDocumentType::class, 'committee_id');
    }

    public function members()
    {
        return $this->hasMany(MuinasCommitteeMember::class, 'committee_id');
    }

    public function protocols()
    {
        return $this->hasMany(MuinasCommitteeProtocol::class, 'committee_id');
    }
}
