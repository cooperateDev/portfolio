<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DB;

class MemberController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Member Controller
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

        $current_member = array();

        $members = DB::table('users')->where('role','=',1)->get();
        return view('admin.member.list',[
            'members' => $members,
            'current_member' => $current_member
        ]);
    }

    public function member_add(Request $request)
    {

        $name=$request->name;
        $email=$request->email;
        $skill=$request->skill;

        $avatar = "";
        $current_member = array();

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if (file_exists("upload/images/avatar/" . $_FILES["file"]["name"])) 
                unlink("upload/images/avatar/" . $_FILES["file"]["name"]);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/avatar/" . $_FILES["file"]["name"]);
            $avatar = $_FILES["file"]["name"];
        }
      

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required',
            'skill' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/member')
                        ->withErrors($validator)
                        ->withInput();

        }

        if ($avatar != "")
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'skill' => $skill,
                'role' => '1',
                'avatar' => $avatar
                ]);
        else
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'skill' => $skill,
                'role' => '1',
                ]);
        
        return redirect('admin/member');
    }

    public function member_del(Request $request, $id)
    {
        DB::table('users')->where('id', '=', $id)->delete();

        return redirect('admin/member');
    }

    public function member_info(Request $request, $id)
    {
        
        $member = DB::table('users')->where('id', '=', $id)->get();
        $members = DB::table('users')->where('role','=',1)->get();
        
        return view('admin.member.list',[
            'members' => $members,
            'current_member' => $member
        ]);
    }

    public function member_edit(Request $request, $id)
    {
        

        $name=$request->name;
        $email=$request->email;
        $skill=$request->skill;

        $avatar = "";
        $current_member = array();

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if (file_exists("upload/images/avatar/" . $_FILES["file"]["name"])) 
                unlink("upload/images/avatar/" . $_FILES["file"]["name"]);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/avatar/" . $_FILES["file"]["name"]);
            $avatar = $_FILES["file"]["name"];
        }
      

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'skill' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/member')
                        ->withErrors($validator)
                        ->withInput();

        }

        if ($avatar != "")
            $user = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'skill' => $skill,
                    'avatar' => $avatar,
                ]);
        else
            $user = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'skill' => $skill,
                ]);

        return redirect('admin/member');
    }
}
