<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhaseFile
 * 
 * @property int $id
 * @property int|null $proposition_id
 * @property string|null $title
 * @property string|null $name
 * @property string|null $filename
 * @property string|null $fileext
 *
 * @package App\Models
 */
class MuinasPropositionPhaseFile extends Model
{
	protected $table = 'muinas_proposition_phase_files';
	public $timestamps = false;

	protected $casts = [
		'proposition_id' => 'int'
	];

	protected $fillable = [
		'proposition_id',
		'title',
		'name',
		'filename',
		'fileext'
	];
}
