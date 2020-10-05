<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Facades\Webhook;
use App\Models\WebhookEvent;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store(Request $request)
    {
        $record = Record::create($request->input());

        Webhook::notify(
            WebhookEvent::findByName('OnRecordSaved'),
            $record->toArray()
        );

        return redirect('/records');
    }

    public function index()
    {
        return view('records', [
            'records' => Record::orderBy('id', 'desc')->get()
        ]);
    }
}
