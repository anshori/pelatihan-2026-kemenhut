<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gisdataModel extends Model
{
	protected $table = 'kotayogyakarta';
	protected $guarded = ['id'];

	public function geojson_api()
	{
		return $this
			->selectRaw('id, st_asgeojson(geom) as geom, provinsi, kabkot, kecamatan, desa')
			->get();
	}
}
