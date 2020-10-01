<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store(Request $request)
    {
        Record::create($request->input());

        return redirect('/records');
    }

    public function index()
    {
        return view('records', [
            'records' => Record::orderBy('id', 'desc')->get()
        ]);
    }
}
