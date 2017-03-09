<?php

namespace App\Http\Controllers;

use App\Wheel;
use Illuminate\Http\Request;

class WheelsController extends Controller
{
    public function index()
    {
        return Wheel::all();
    }

    public function show($wheel_id)
    {
        return Wheel::find($wheel_id);
    }

    public function store(Request $request)
    {
        return Wheel::create($request->all());
    }

    public function update(Request $request, $wheel_id)
    {
        $wheel = Wheel::findOrFail($wheel_id);
        $wheel->update($request->all());
        return $wheel;
    }

    public function destroy($wheel_id)
    {
        $wheel = Wheel::findOrFail($wheel_id);
        $wheel->delete();

        return 'Wheel Successfully Deleted.';
    }
}
