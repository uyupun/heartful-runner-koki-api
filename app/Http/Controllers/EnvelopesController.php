<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Envelope;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnvelopesController extends Controller
{
    public function create(Request $request)
    {
        $envelope = Envelope::create([
            'code' => Str::uuid()->toString(),
            'title' => $request->title,
            'sender_id' => $request->user()->id,
            'holder_id' => $request->user()->id,
            'state' => 'IN_PROGRESS',
        ]);

        return response()->json($envelope, 201);
    }

    public function verify($id)
    {
        $exist_envelope = Envelope::find($id) ? true : false;
        return response()->json(["exist_envelope" => $exist_envelope], 200);
    }

    public function receive(Request $request, $id)
    {
        $envelope = Envelope::with('messages')->find($id);
        $envelope->update([
            'holder_id' => $request->user()->id,
            'state' => 'RECEIVED',
        ]);

        return response()->json($envelope, 201);
    }
}
