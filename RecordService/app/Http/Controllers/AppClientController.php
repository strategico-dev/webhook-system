<?php

namespace App\Http\Controllers;

use App\Models\AppClient;
use App\Models\WebhookEvent;
use Illuminate\Http\Request;

class AppClientController extends Controller
{
    public function store(Request $request)
    {
        AppClient::create($request->input());

        return redirect('/records');
    }

    public function index()
    {
        return view('registry', [
            'events' => WebhookEvent::get()
        ]);
    }
}
