<?php

namespace App\Http\Controllers;

use App\Models\gisdataModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function __construct()
	{
		$this->gisdata = new gisdataModel();
	}

	public function geojson_kotayogyakarta()
	{
		$polygons = $this->gisdata->geojson_api();

		$feature = array();

		foreach ($polygons as $data) {
			$feature[] = [
				'type' => 'Feature',
				'geometry' => json_decode($data->geom),
				'properties' => [
					'id' => $data->id,
					'provinsi' => $data->provinsi,
					'kabkot' => $data->kabkot,
					'kecamatan' => $data->kecamatan,
					'desa' => $data->desa,
				]
			];
		}

		return response()->json([
			'type' => 'FeatureCollection',
			'features' => $feature,
		])->setEncodingOptions(JSON_NUMERIC_CHECK);
	}
}
