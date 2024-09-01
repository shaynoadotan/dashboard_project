<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function getMessages()
    {
        $messages = Message::all(); 
        return response()->json($messages); 
    }
}
