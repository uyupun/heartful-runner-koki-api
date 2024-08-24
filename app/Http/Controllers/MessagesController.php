<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Envelope;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Request $request)
    {
        $message = Message::create([
            'envelope_id' => $request->envelope_id,
            'content' => $request->content,
            'writer_id' => $request->user()->id,
            'writer_name' => $request->writer_name,
        ]);

        $envelope = Envelope::find($request->envelope_id);
        $envelope->update([
            'holder_id' => $request->user()->id,
        ]);

        return response()->json($message, 201);
    }
}
