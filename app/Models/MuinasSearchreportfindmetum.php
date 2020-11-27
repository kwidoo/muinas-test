<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportfindmetum
 * 
 * @property int $searchreportfind
 * @property bool|null $usetext
 * @property string $type
 * @property string|null $text
 * @property int|null $classifier
 * 
 * @property MuinasClassificator|null $muinas_classificator
 * @property MuinasSearchreportfind $muinas_searchreportfind
 *
 * @package App\Models
 */
class MuinasSearchreportfindmetum extends Model
{
	protected $table = 'muinas_searchreportfindmeta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreportfind' => 'int',
		'usetext' => 'bool',
		'classifier' => 'int'
	];

	protected $fillable = [
		'usetext',
		'text',
		'classifier'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'classifier');
	}

	public function muinas_searchreportfind()
	{
		return $this->belongsTo(MuinasSearchreportfind::class, 'searchreportfind');
	}
}
