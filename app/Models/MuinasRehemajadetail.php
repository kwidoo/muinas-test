<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemajadetail
 * 
 * @property int $rehemaja
 * @property string $description
 * @property string $comment
 * @property int $detail
 * @property int|null $state
 *
 * @package App\Models
 */
class MuinasRehemajadetail extends Model
{
	protected $table = 'muinas_rehemajadetail';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rehemaja' => 'int',
		'detail' => 'int',
		'state' => 'int'
	];

	protected $fillable = [
		'description',
		'comment',
		'state'
	];
}
