<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdata;
class userController extends Controller
{
    public function sign(Request $request){
        if($request->isMethod('post')){
            $newuser=new Userdata();
            $newuser->fname=$request->input('fname');
            $newuser->lname=$request->input('lname');
            $newuser->email=$request->input('email');
            $newuser->password=$request->input('password');
            $newuser->phone=$request->input('pnomber');
            $newuser->city=$request->input('city');
            $newuser->save();
        }
            return view('user.signup');
    }
}
