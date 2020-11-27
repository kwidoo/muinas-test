<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHelpv2
 * 
 * @property string $id
 * @property bool|null $active
 * @property string|null $inherit
 * @property string|null $content
 * @property bool|null $issaved
 * 
 * @property MuinasHelpv2|null $muinas_helpv2
 * @property Collection|MuinasHelpv2[] $muinas_helpv2s
 *
 * @package App\Models
 */
class MuinasHelpv2 extends Model
{
	protected $table = 'muinas_helpv2';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool',
		'issaved' => 'bool'
	];

	protected $fillable = [
		'active',
		'inherit',
		'content',
		'issaved'
	];

	public function muinas_helpv2()
	{
		return $this->belongsTo(MuinasHelpv2::class, 'inherit');
	}

	public function muinas_helpv2s()
	{
		return $this->hasMany(MuinasHelpv2::class, 'inherit');
	}
}
