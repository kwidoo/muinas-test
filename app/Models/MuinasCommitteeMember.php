<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommitteeMember extends Model
{
    use HasFactory;
    protected $table = 'muinas_committee_member';
    public $timestamps = false;
    
    public function person()
    {
        return $this->belongsTo(MuinasPerson::class);
    }

    public function parent() 
    {
        return $this->belongsTo(MuinasCommitee::class, 'committee_id', 'id');
    }

}
