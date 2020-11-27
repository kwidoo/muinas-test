<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsLink
 * 
 * @property int $id
 * @property int|null $proposition_id
 * @property string|null $title
 * @property string|null $url
 * @property string|null $url_type
 * @property int|null $secret
 * 
 * @property MuinasProposition|null $muinas_proposition
 *
 * @package App\Models
 */
class MuinasPropositionsLink extends Model
{
	protected $table = 'muinas_propositions_links';
	public $timestamps = false;

	protected $casts = [
		'proposition_id' => 'int',
		'secret' => 'int'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'proposition_id',
		'title',
		'url',
		'url_type',
		'secret'
	];

	public function muinas_proposition()
	{
		return $this->belongsTo(MuinasProposition::class, 'proposition_id');
	}
}
