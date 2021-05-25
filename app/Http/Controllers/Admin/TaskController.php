<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use DB;

class TaskController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Task Controller
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

        $current_task = array();

        $tasks = DB::table('tasks')
                ->leftJoin('categories','tasks.category_id','=','categories.id')
                ->select('tasks.*', 'categories.title')
                ->get();

        $categories = Category::all();

        return view('admin.task.list',[
            'tasks' => $tasks,
            'current_task' => $current_task,
            'categories' => $categories
        ]);
    }

    public function task_add(Request $request)
    {

        $name=$request->name;
        $desc=$request->desc;
        $category=$request->category;
        $link=$request->link;
        
        $category_id = DB::table('categories')
                    ->where('title','=',$category)
                    ->select('id')
                    ->get();


        $backImg = "";
        $current_task = array();

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if (file_exists("upload/images/task/" . $_FILES["file"]["name"])) 
                unlink("upload/images/task/" . $_FILES["file"]["name"]);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/task/" . $_FILES["file"]["name"]);
            $backImg = $_FILES["file"]["name"];
        }
      

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'desc' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/task')
                        ->withErrors($validator)
                        ->withInput();

        }

        if ($backImg != "")
            $task = Task::create([
                'name' => $name,
                'desc' => $desc,
                'category_id' => $category_id[0]->id,
                'link' => $link,
                'url' => $backImg
                ]);
        else
            $task = Task::create([
                'name' => $name,
                'desc' => $desc,
                'category_id' => $category_id[0]->id,
                'link' => $link
                ]);


        return redirect('admin/task');
    }

    public function task_del(Request $request, $id)
    {
        DB::table('tasks')->where('id', '=', $id)->delete();

        return redirect('admin/task');
    }

    public function task_info(Request $request, $id)
    {
        
        $task = DB::table('tasks')
                ->leftJoin('categories','tasks.category_id','=','categories.id')
                ->select('tasks.*', 'categories.title')
                ->where('tasks.id','=',$id)
                ->get();


        $tasks = DB::table('tasks')
                ->leftJoin('categories','tasks.category_id','=','categories.id')
                ->select('tasks.*', 'categories.title')
                ->get();

        $categories = Category::all();
        
        return view('admin.task.list',[
            'tasks' => $tasks,
            'current_task' => $task,
            'categories' => $categories
        ]);
    }

    public function task_edit(Request $request, $id)
    {
        

        $name=$request->name;
        $desc=$request->desc;
        $category=$request->category;
        $link=$request->link;

        $category_id = DB::table('categories')
                    ->where('title','=',$category)
                    ->select('id')
                    ->get();


        $backImg = "";
        $current_task = array();

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if (file_exists("upload/images/task/" . $_FILES["file"]["name"])) 
                unlink("upload/images/task/" . $_FILES["file"]["name"]);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/task/" . $_FILES["file"]["name"]);
            $backImg = $_FILES["file"]["name"];
        }
      

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'desc' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/task')
                        ->withErrors($validator)
                        ->withInput();

        }

        if ($backImg != "")
            $task = DB::table('tasks')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'desc' => $desc,
                    'category_id' => $category_id[0]->id,
                    'link' => $link,
                    'url' => $backImg,
                ]);
        else
            $task = DB::table('tasks')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'desc' => $desc,
                    'category_id' => $category_id[0]->id,
                    'link' => $link
                ]);

        return redirect('admin/task');
    }
}
