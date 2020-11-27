<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageobjectmeeting
 * 
 * @property int $id
 * @property int $heritage
 * @property Carbon $created
 * @property int $person
 * @property string $description
 * @property bool|null $latest
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasHeritageobjectmeeting extends Model
{
	protected $table = 'muinas_heritageobjectmeeting';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'person' => 'int',
		'latest' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'heritage',
		'created',
		'person',
		'description',
		'latest'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
