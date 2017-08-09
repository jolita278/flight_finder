<?php namespace App\Http\Controllers;

use App\models\FFAirlines;
use App\models\FFAirports;
use App\models\FFFlights;
use Illuminate\Routing\Controller;

class FFFlightsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffflights
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration ['title'] = "Flights";
        $configuration ['list'] = FFFlights::with('airline','origin_airport', 'destination_airport')->get()->toArray();

        $configuration ['new'] = route('app.flights.create');
        $configuration ['edit'] = 'app.flights.edit';
        $configuration ['showDelete'] = 'app.flights.destroy';
        return view('admin.adminList', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffflights/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        $configuration ['title'] = "New Flight record";
        $configuration ['destination'] = FFAirports::pluck('name', 'id')->toArray();
        $configuration ['origin'] = FFAirports::pluck('name', 'id')->toArray();
        $configuration ['airline_id'] = FFAirlines::pluck('name', 'id')->toArray();

        return view('admin.adminFormFlights', $configuration);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /ffflights
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        $data = request()->all();
//        dd($data);

        FFFlights::create([
            'airline_id' => $data['airline_id'],
            'destination' => $data['destination'],
            'origin' => $data['origin'],
            'arival' => $data['arival'],
            'depature' => $data['depature'],
        ]);

        return redirect(route('app.flights.index'));
	}

	/**
	 * Display the specified resource.
	 * GET /ffflights/{id}
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
	 * GET /ffflights/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
        $configuration ['route'] = 'app.flights.edit';
        $configuration ['title'] = "Edit Flight record";
        $configuration['item'] = FFFlights::find($id);
        $configuration['item']->pluck('id')->toArray();
        $configuration ['destination'] = FFAirports::pluck('name', 'id')->toArray();
        $configuration ['origin'] = FFAirports::pluck('name', 'id')->toArray();
        $configuration ['airline_id'] = FFAirlines::pluck('name', 'id')->toArray();

        return view('admin.adminFormFlights', $configuration);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ffflights/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
        $data = request()->all();
        $record =FFFlights::find($id);
        $record->update($data);


        return redirect(route('app.flights.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ffflights/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
        FFFlights::destroy($id);
        return json_encode(["success" => true, "id" => $id]);
	}

}