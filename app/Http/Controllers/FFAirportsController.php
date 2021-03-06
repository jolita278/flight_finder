<?php namespace App\Http\Controllers;

use App\models\FFAirports;
use App\models\FFCountries;
use Illuminate\Routing\Controller;

class FFAirportsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /ffairportss
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration ['title'] = "Airports";
        $configuration ['list'] = FFAirports::with('country')->get()->toArray();

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
        $configuration ['route'] ="app.airports.create";
        $configuration ['title'] = "New Airport record";
        $configuration ['country'] = FFCountries::pluck('original_name', 'id')->toArray();

        return view('admin.adminFormAirports', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ffairportss
     *
     * @return Response
     */
    public function adminStore()
    {
        $data = request()->all();

        FFAirports::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'country_id' => $data['country_id'],
            'city' => $data['city'],
        ]);

        return redirect(route('app.airports.index'));
    }

    /**
     * Display the specified resource.
     * GET /ffairportss/{id}
     *
     * @param  int $id
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
     * @param  int $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $configuration ['route'] = 'app.airports.edit';
        $configuration ['title'] = "Edit Airport record";
        $configuration['item'] = FFAirports::find($id);
        $configuration['item']->pluck('id')->toArray();
        $configuration ['country'] = FFCountries::pluck('original_name', 'id')->toArray();

        return view('admin.adminFormAirports', $configuration);
    }

    /**
     * Update the specified resource in storage.
     * PUT /ffairportss/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        $data = request()->all();
        $record =FFAirports::find($id);
        $record->update($data);


        return redirect(route('app.airports.index'));
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ffairportss/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        FFAirports::destroy($id);
        return json_encode(["success" => true, "id" => $id]);
    }

}