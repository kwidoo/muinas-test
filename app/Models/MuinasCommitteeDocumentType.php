<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuinasCommitteeDocumentType extends Model
{
    use HasFactory;

    protected $table = 'muinas_committee_document_type';
    public $timestamps = false;
    
    public function parent() 
    {
        return $this->belongsTo(MuinasCommitee::class, 'committee_id', 'id');
    }
}
