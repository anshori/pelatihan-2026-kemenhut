<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApitestController extends Controller
{
	public function getPolygons()
	{
		$gisdataModel = new \App\Models\testgisdataModel();
		$geojson = $gisdataModel->geojson_polygons();

		return response()->json($geojson);
	}
}
