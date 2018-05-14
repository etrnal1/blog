<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;

class UsersController extends Controller
{
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

session()->flash('success','欢迎开始一段新的旅程');
 return redirect()->route('users.show',[$user]);


    }
//用户编辑的页面,查找用户数据，进行将数据赋予给User 视图
    public function edit($id)
    {
        $user =User::find($id);
        return view('user.edit',compact('user'));
    }
}
