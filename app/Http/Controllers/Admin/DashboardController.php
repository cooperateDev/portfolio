<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\TaskMNG;
use App\Models\User;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $year = $request->year;
        $month = $request->month;

        if($year == null)
            $year = date('Y');

        if($month == null)
            $month = date('m');

        $start = $month . "/" . '1/' . $year;
        $end = $month . '/' . '31/' . $year;

        $tasks = TaskMNG::select('task_mngs.*', 'users.name')
                ->leftJoin('users', 'task_mngs.user_id', '=', 'users.id')
                ->orderby('task_mngs.id', 'desc')
                ->where(function($query) use ($start, $end) {
                    $query->orWhere('end_date', null)
                          ->orWhereBetween('end_date', [$start, $end]);
                })
                ->get();

        $total_price = TaskMNG::sum('price');
        
        return view('admin.dashboard',[
            'tasks'         => $tasks,
            'total_price'   => $total_price
        ]);
    }
}
