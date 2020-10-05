<?php

namespace App\Http\Controllers\Webhooks;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecordTrigger extends Controller
{
    public function onSaved(Request $request)
    {
        return Record::create($request->input());
    }
}
