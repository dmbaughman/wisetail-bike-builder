<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;

class SeatsController extends Controller
{
    public function index()
    {
        return Seat::all();
    }

    public function show($seat_id)
    {
        return Seat::find($seat_id);
    }

    public function store(Request $request)
    {
        return Seat::create($request->all());
    }

    public function update(Request $request, $seat_id)
    {
        $seat = Seat::findOrFail($seat_id);
        $seat->update($request->all());
        return $seat;
    }

    public function destroy($seat_id)
    {
        $seat = Seat::findOrFail($seat_id);
        $seat->delete();

        return 'Seat Successfully Deleted.';
    }
}
