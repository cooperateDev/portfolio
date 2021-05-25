<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\Validator;
use DB;

class SlideController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | slide Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    protected $redirectTo = 'admin/';

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $slides = DB::table('slides')->get();

        $order_array = array();

        foreach($slides as $key => $slide)
            array_push($order_array, $slide->order);

        return view('admin.slide.list',[
            'slides' => $slides,
            'orders' => $order_array
        ]);
    }

    public function slide_add(Request $request)
    {

        $order_array = array();
        foreach($_FILES as $key => $file)
        {
            if($_FILES[$key]["name"]) {
                $temp = explode(".", $_FILES[$key]["name"]);
                $extension = end($temp);
                $temp1 = explode("file",$key);
                $index = end($temp1);

                DB::table('slides')->where('order','=',$index)->delete();

                array_push($order_array,$index);

                if (file_exists("upload/images/slide/" . $_FILES[$key]["name"])) 
                    unlink("upload/images/slide/" . $_FILES[$key]["name"]);
           
                move_uploaded_file($_FILES[$key]["tmp_name"],
                "upload/images/slide/" . $_FILES[$key]["name"]);
                $backImg = $_FILES[$key]["name"];

                
               
                $slide = Slide::create([
                'order' => $index,
                'url' => $backImg
                ]);
                
            }   
        }
        
        

        $slides = DB::table('slides')->get();
        
        return redirect('admin/slide');
    }

    public function slide_del(Request $request, $order)
    {
        DB::table('slides')->where('order', '=', $order)->delete();

        return redirect('admin/slide');
    }

}
