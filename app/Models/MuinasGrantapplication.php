<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MuinasGrantapplication extends Model
{
	use HasFactory;
	
	protected $table = 'muinas_grantapplication';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'requested_amount' => 'float',
		'self_financing_amount' => 'float',
		'co_financing_amount' => 'float',
		'mandate' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'report' => 'int',
		'total_amount' => 'float',
		'application_round' => 'int',
		'module_person' => 'int',
		'confirmationfrom_the_applicant' => 'bool',
		'repairer' => 'int',
		'repairer_type' => 'bool',
		'domain' => 'int',
		'refund_sum' => 'float',
		'document_classified' => 'bool'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'to_fix_deadline',
		'to_fix_date',
		'submitted',
		'module_deadline',
		'confirm_date',
		'reject_date',
		'cancel_date',
		'nosatisfied_date',
		'deadline_for_report',
		'procedural_deadline'
	];

	protected $fillable = [
		'number',
		'name',
		'phone',
		'email',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_fax',
		'contact_person_email',
		'bank',
		'account',
		'worklist',
		'additional_information',
		'requested_amount',
		'self_financing_amount',
		'co_financing_amount',
		'mandate',
		'created',
		'state',
		'modified',
		'pdf',
		'ddoc',
		'lang',
		'creater',
		'ownerperson',
		'county',
		'parish',
		'signed',
		'person',
		'message',
		'to_fix_deadline',
		'to_fix_date',
		'repaired',
		'report',
		'signtype',
		'submitted',
		'adminstate',
		'total_amount',
		'grants_from_other_sources',
		'additional_coordination_information',
		'application_round',
		'module_person',
		'module_deadline',
		'kmkr',
		'confirmationfrom_the_applicant',
		'repairer',
		'repairer_type',
		'domain',
		'cancel_decision',
		'confirm_decision',
		'confirm_date',
		'reject_date',
		'cancel_date',
		'nosatisfied_date',
		'refund_sum',
		'purpose_of_the_grant',
		'deadline_for_report',
		'not_satisfied_decision',
		'procedural_deadline',
		'document_classified'
	];

	/**
	 * @return BelongsTo
	 */
	public function muinas_application_round_domain(): BelongsTo
	{
		return $this->belongsTo(MuinasApplicationRoundDomain::class, 'domain');
	}

	/**
	 * @return BelongsTo
	 */
	public function muinas_application_round(): BelongsTo
	{
		return $this->belongsTo(MuinasApplicationRound::class, 'application_round');
	}

	public function muinas_ownerperson(): BelongsTo
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	/**
	 * @return BelongsTo
	 */
	public function muinas_person(): BelongsTo
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	/**
	 * @return BelongsTo
	 */
	public function muinas_repaired(): BelongsTo
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'repaired');
	}


	/***** */
	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'report');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	
	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	

	public function muinas_emergencysupports()
	{
		return $this->hasMany(MuinasEmergencysupport::class, 'grantapplication');
	}

	public function muinas_grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'repaired');
	}

	public function muinas_grantapplication_comments()
	{
		return $this->hasMany(MuinasGrantapplicationComment::class, 'grantapplication_id');
	}

	public function muinas_grantapplication_controls()
	{
		return $this->hasMany(MuinasGrantapplicationControl::class, 'grantapplication');
	}

	public function muinas_grantapplication_submissions()
	{
		return $this->hasMany(MuinasGrantapplicationSubmission::class, 'grantapplication_number');
	}

	public function muinas_grantapplicationcm_types()
	{
		return $this->hasMany(MuinasGrantapplicationcmType::class, 'grantapplication');
	}

	public function muinas_grantapplicationcontractfiles()
	{
		return $this->hasMany(MuinasGrantapplicationcontractfile::class, 'grantapplication');
	}

	public function muinas_grantapplicationcoordinations()
	{
		return $this->hasMany(MuinasGrantapplicationcoordination::class, 'grantapplication');
	}

	public function muinas_grantapplicationcounties()
	{
		return $this->hasMany(MuinasGrantapplicationcounty::class, 'grantapplication');
	}

	public function muinas_grantapplicationinternalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationinternalfile::class, 'grantapplication');
	}

	public function muinas_grantapplicationmonuments()
	{
		return $this->hasMany(MuinasGrantapplicationmonument::class, 'grantapplication');
	}

	public function muinas_grantapplicationmonumentowners()
	{
		return $this->hasMany(MuinasGrantapplicationmonumentowner::class, 'grantapplication');
	}

	public function muinas_grantapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasGrantapplicationmuinasobject::class, 'grantapplication');
	}

	public function muinas_grantapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationoriginalfile::class, 'grantapplication');
	}

	public function muinas_grantapplicationreissues()
	{
		return $this->hasMany(MuinasGrantapplicationreissue::class, 'grantapplication');
	}

	public function muinas_grantapplicationreportdeadlines()
	{
		return $this->hasMany(MuinasGrantapplicationreportdeadline::class, 'grantapplication');
	}

	public function muinas_grantapplicationstatelogs()
	{
		return $this->hasMany(MuinasGrantapplicationstatelog::class, 'grantapplication');
	}

	public function muinas_grantapplicationworklistfiles()
	{
		return $this->hasMany(MuinasGrantapplicationworklistfile::class, 'grantapplication');
	}
}
