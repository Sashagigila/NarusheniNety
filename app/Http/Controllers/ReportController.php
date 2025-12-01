<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function index()
    {
        $reports = Report::paginate(8); 
        return view('report.index', compact('reports'));
    }
    
     public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }

     public function store(Request $request, Report $report)
    {
        $data = $request->validate([
          'number' => 'string',
          'description' => 'string',
        ]);
        Report::create($data);

        return redirect()->back();
    }

     public function edit(Report $report)
    {
        return view('report.edit', compact('report'));
    }
    
    public function update(Request $request, Report $report)
   {
    $validated = $request->validate([
        'number' => 'string',
        'description' => 'string',
    ]);

    $report->update($validated);

    return redirect()->back();
    }
}