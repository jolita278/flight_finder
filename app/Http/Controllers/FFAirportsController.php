<?php namespace App\Http\Controllers;

use App\models\FFAirports;
use Illuminate\Routing\Controller;

class FFAirportsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffairportss
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration ['title'] = "Airports";
        $configuration ['list'] = FFAirports::get()->toArray();
        $configuration ['new'] = route('app.airports.create');
        $configuration ['edit'] = 'app.airports.edit';
        $configuration ['showDelete'] = 'app.airports.destroy';
        return view('admin.adminList', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffairportss/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ffairportss
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ffairportss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ffairportss/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ffairportss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ffairportss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}