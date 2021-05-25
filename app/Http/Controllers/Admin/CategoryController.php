<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use DB;

class CategoryController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Category Controller
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

        $current_category = array();

        $categories = Category::all();

        return view('admin.category.list',[
            'categories' => $categories,
            'current_category' => $current_category
        ]);
    }

    public function category_add(Request $request)
    {

        $current_category = array();

        $title=$request->title;
        $desc=$request->desc;

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/category')
                        ->withErrors($validator)
                        ->withInput();

        }

        $category = Category::create([
                'title' => $title,
                'desc' => $desc,
                ]);
        
        return redirect('admin/category');
    }

    public function category_del(Request $request, $id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();

        return redirect('admin/category');
    }

    public function category_info(Request $request, $id)
    {
        
        $current_category = DB::table('categories')->where('id', '=', $id)->get();
        $categories = Category::all();
        
        return view('admin.category.list',[
            'categories' => $categories,
            'current_category' => $current_category
        ]);
    }

    public function category_edit(Request $request, $id)
    {
        

        $title=$request->title;
        $desc=$request->desc;

        $current_category = array();

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/category')
                        ->withErrors($validator)
                        ->withInput();

        }

        $cateogry = DB::table('categories')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'desc' => $desc,
            ]);
      

        return redirect('admin/category');
    }
}
