<?php

namespace App\Http\Controllers;

use App\Frame;
use Illuminate\Http\Request;

class FramesController extends Controller
{
    public function index()
    {
        return Frame::all();
    }

    public function show($frame_id)
    {
        return Frame::find($frame_id);
    }

    public function store(Request $request)
    {
        return Frame::create($request->all());
    }

    public function update(Request $request, $frame_id)
    {
        $frame = Frame::findOrFail($frame_id);
        $frame->update($request->all());
        return $frame;
    }

    public function destroy($frame_id)
    {
        $frame = Frame::findOrFail($frame_id);
        $frame->delete();

        return 'Frame Successfully Deleted.';
    }
}
