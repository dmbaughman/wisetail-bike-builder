<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class BikesController extends Controller
{
    public function index()
    {
        return Bike::with('frame', 'wheel', 'seat')->get();
    }

    public function show($bike_id)
    {
        return Bike::with('frame', 'wheel', 'seat')->get()->find($bike_id);
    }

    public function store(Request $request)
    {
        return Bike::create($request->all());
    }

    public function update(Request $request, $bike_id)
    {
        $bike = Bike::findOrFail($bike_id);
        $bike->update($request->all());
        return $bike;
    }

    public function destroy($bike_id)
    {
        $bike = Bike::findOrFail($bike_id);
        $bike->delete();

        return 'Bike Successfully Deleted.';
    }
}
