<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adminusers;
use DB;

class UserController extends Controller
{
    public function User(){

return view('backEnd.admin.User.adduser');
    }

    public function storeUser(Request $request){
    	$this->validate($request,[
    			'name'=>'required',
                'email'=>'required',
                'address'=>'required',
    			'cell'=>'required',
    			'password'=>'required',
    		]);
    	// return $request->all();

    	$user=New Adminusers();
    	$user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
    	$user->cell=$request->cell;
        $user->password=bcrypt($request['password']);
        $user->cpassword=bcrypt($request['cpassword']);
    	$user->save();
		return redirect('/user/add')->with('message','User Added Successfully');



    // Category::create($request->all());

    // 	DB::table('users')->insert([
    // 		'name'=>$request->name,
    // 		'email'=>$request->email,
    // 		'password'=>$request->password,
    // 		]);
    // return redirect('/user/add')->with('message','User Added Successfully');

    }


    public function UserList(){
    	$users=Adminusers::all();
return view('backEnd.admin.User.userlist',['users'=>$users]);
    }


    public function edit($id){
    $userById=Adminusers::where('id',$id)->first();
return view('backEnd.admin.User.edituser',['userById'=>$userById]);
    }


    public function update(Request $request ){
    $user = Adminusers::find($request->id);
    $user->name=$request->name;
    $user->email=$request->email;
    $user->address=$request->address;
    $user->cell=$request->cell;
    $user->password=bcrypt($request['password']);
    $user->cpassword=bcrypt($request['cpassword']);
    $user->save();
    return redirect('/user/all')->with('message','USER UPDATED SUCCESSFULLY');

    }
    public function delete($id){
    $user = Adminusers::find($id);
    $user->delete();
    return redirect('/user/all')->with('message','USER Deleted SUCCESSFULLY');
    }
}
