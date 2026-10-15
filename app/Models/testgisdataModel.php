<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class testgisdataModel extends Model
{
  protected $table = 'kotayogyakarta';

	protected $guarded = ['id'];

	public function geojson_polygons()
	{
		$polygons = $this
			->select(DB::raw('id, st_asgeojson(geom) as geom, provinsi, kabkot, kecamatan, desa'))
			->get();

		$geojson = [
			'type' => 'FeatureCollection',
			'features' => [],
		];

		foreach ($polygons as $p) {
			$feature = [
				'type' => 'Feature',
				'geometry' => json_decode($p->geom),
				'properties' => [
					'id' => $p->id,
					'provinsi' => $p->provinsi,
					'kabkot' => $p->kabkot,
					'kecamatan' => $p->kecamatan,
					'desa' => $p->desa,
				],
			];

			array_push($geojson['features'], $feature);
		}
		
		return $geojson;
	}
}
