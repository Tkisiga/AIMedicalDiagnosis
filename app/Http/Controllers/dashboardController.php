<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visits;
use App\patients;
use App\appointments;
use DB;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function getDashboard(){
        $count_patients = patients::count();
        $count_visits = visits::count();
        $count_appointments = appointments::count();
        return view('admin_layouts.dashboard',compact('count_patients','count_visits','count_appointments'));
    }
    public function getGraphs(){
        $today = Carbon::now();
        $last_12_months = Carbon::now()->subMonth(12);
        $patient_graph = patients::where('created_at', '>=', $today)
                            ->where('created_at', '<=', $last_12_months)
                            ->select(DB::raw("COUNT(*) as count, DATE_FORMAT(created_at, '%m') as created_at"))
                            
                            ->groupBy('created_at')
                            ->get();
        dd($patient_graph);
        return response()->json($data);
    }
    public function getPieChart(){
        $data=patients::select('age','first_name')->get();
        return response()->json($data);
    }
}
