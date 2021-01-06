<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\Request;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store()
    {
        $content = substr(Request::get('content'), 0, 255);

//    $content = filter_var(Request::get('content'), FILTER_SANITIZE_STRING);

        $message = new Message([
            'content' => $content,
            'user_id' => auth()->user()->id,
        ]);

        return $message->save();
    }
}
