<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsFile
 * 
 * @property int $id
 * @property int|null $proposition
 * @property int|null $filebank
 * @property string|null $type
 * @property string|null $title
 * @property string|null $status
 *
 * @package App\Models
 */
class MuinasPropositionsFile extends Model
{
	protected $table = 'muinas_propositions_files';
	public $timestamps = false;

	protected $casts = [
		'proposition' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'proposition',
		'filebank',
		'type',
		'title',
		'status'
	];
}
