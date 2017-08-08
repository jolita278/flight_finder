<?php namespace App\Http\Controllers;

use App\models\FFAirlines;
use Illuminate\Routing\Controller;

class FFAirlinesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffairlines
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration ['title'] = "Airlines";
        $configuration ['list'] = FFAirlines::get()->toArray();
        $configuration ['new'] = route('app.airlines.create');
        $configuration ['edit'] = 'app.airlines.edit';
        $configuration ['showDelete'] = 'app.airlines.destroy';
        return view('admin.adminList', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffairlines/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        $configuration ['title'] = "New Airline record";

        return view('admin.adminFormAirlines', $configuration);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ffairlines
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        $data = request()->all();

        FFAirlines::create([
            'name' => $data['name'],
        ]);

        return redirect(route('app.airlines.index'));
	}

	/**
	 * Display the specified resource.
	 * GET /ffairlines/{id}
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
	 * GET /ffairlines/{id}/edit
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
	 * PUT /ffairlines/{id}
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
	 * DELETE /ffairlines/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
        FFAirlines::destroy($id);
        return json_encode(["success" => true, "id" => $id]);
	}

}