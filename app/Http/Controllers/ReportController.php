<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Report;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(Request $request)
=======
use App\Models\Status;

class ReportController extends Controller
{
     public function index(Request $request)
>>>>>>> f90c7e098f3444578514822755aa4928ea8c0a4e
    {
        $sort = $request->input('sort');
        if($sort != 'asc' && $sort != 'desc'){
           $sort = 'desc';
        } 
         $status = $request->input('status');
         $validated = $request->validate([
            'status' => "exists:statuses,id"
         ]);
         if($validated){
            $reports = Report::where('status_id', $status)
            ->orderBy('created_at', $sort)
            ->paginate(8);
         } else {
            $reports = Report::orderBy('created_at', $sort)
            ->paginate(8);
         }
         $statuses = Status::all();

<<<<<<< HEAD
         return view('report.index', compact('reports', 'statuses', 'sort', 'status'));
=======
         return view('reports.index', compact('reports', 'statuses', 'sort', 'status'));
>>>>>>> f90c7e098f3444578514822755aa4928ea8c0a4e
         
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