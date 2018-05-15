<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;

class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store', 'index']
        ]);



    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view ('users.show',compact('user'));
    }

    public  function store(Request $request)
    {
         $this->validate($request,[

                'name'=>'required|max:50',
                'email'=>'required|email|unique:users|max:255',
                'passowrd'=>'confirmed'

         ]);
         $user =User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),

         ]);
         Auth::login($user);
   session()->flash('success','欢迎开始一段新的旅程');
   return redirect()->route('users.show',[$user]);


    }
//用户编辑的页面,查找用户数据，进行将数据赋予给User 视图
 public function edit(User $user)
    {

        $user = User::findOrFail(6);

        return view('users.edit', compact('user'));
    }

}
