<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use \App\Place;
use \App\Subject;
use \App\Package;
use \Illuminate\Support\Facades\DB;
class adminController extends Controller
{
   public function add_place(Request $req){
       $er="";
    if($req->isMethod('post')){
    $pl = Place::where('place_name',$req->input('pname'))->first();
if ($pl != null) {
  $er="This place already exists"; 
}
else{
    $er="This place added";
            $p=new Place();
            $p->place_name=$req->input('pname');
            $p->place_description=$req->input('dname');
            $p->save();
}
       }
        $arr=Array('d'=>$er);
       return view('admin.addplace',$arr);
   }
      public function add_subject(Request $req){
           $er="";
       if($req->isMethod('post')){
 $su = Subject::where('subject_name',$req->input('sname'))->first();
if ($su != null) {
  $er="This subject already exists"; 
}
else{
    $er="This subject added";
            $p=new Subject();
            $p->subject_name=$req->input('sname');
            $p->subject_description=$req->input('dname');
            $p->save();
}
       }
      $arr=Array('d'=>$er);
       return view('admin.addsubject',$arr);
   }
   
    public function add_package(Request $req){
       $ap= Place::all();
       $as= Subject::all();
           $er="";
       if($req->isMethod('post')){
 $ss = Place::where('place_name',$req->input('place'))->first(); 
 $sss =Subject::where('subject_name',$req->input('sub'))->first();

 
 $su = Package::where('package_name',$req->input('pname'))->first();
if ($su != null) {
  $er="This package already exists"; 
}
else{
    $er="This package added";
            $p=new Package();
            $p->package_name=$req->input('pname');
            $p->hotel=$req->input('hotel');
            $p->going_time=$req->input('going');
            $p->image=$req->input('file');
            $p->airline_price=$req->input('air');
            $p->bus_brice=$req->input('bus');
            $p->train_price=$req->input('train');
            $p->daiys=$req->input('day');
            $p->place_id=$ss->id;
            $p->subject_id=$sss->id;
            $p->save();
}
       }
     $arr=Array('alls'=>$as,'allp'=>$ap,'err'=>$er);
       return view('admin.addpackage',$arr);
   }
   public function profile($id){
        $or= DB::table('packages')->join('orders','orders.package_id','packages.package_id')->where('orders.user_id',$id)->get();
        $us= \App\Data_user::find($id);  
        return view('admin.profile',['order'=> $or,'user'=>$us]);
   }
   
   public function view_user(){
       $user=\App\Data_user::all();
       $arr=Array('user'=>$user);
       return view('admin.view_users',$arr);
   }
     public function delete_place(){
       $user= Place::all();
       $arr=Array('user'=>$user);
       return view('admin.deleteplace',$arr);
   }
     public function delete_subject(){
       $user= Subject::all();
       $arr=Array('user'=>$user);
       return view('admin.deletesubject',$arr);
   }
       public function update_package(){
       $user=DB::table('places')->join('packages','packages.place_id','places.id')->join('subjects','subjects.id','packages.subject_id')->get(); 
       $arr=Array('user'=>$user);
       return view('admin.updatepackages',$arr);
   }
     public function edit_package(Request $req,$id){
       $er="";
         if($req->isMethod('post')){
 $ss = Place::where('place_name',$req->input('place'))->first(); 
 $sss =Subject::where('subject_name',$req->input('sub'))->first();

 
 $su = Package::where('package_name',$req->input('pname'))->first();
if ($su != null) {
  $er="This package already exists"; 
}
else{
    $er="This package added";
            $np=Package::find($id);
            $np->package_name=$req->input('pname');
            $np->hotel=$req->input('hotel');
            $np->going_time=$req->input('going');
            $np->image=$req->input('file');
            $np->airline_price=$req->input('air');
            $np->bus_brice=$req->input('bus');
            $np->train_price=$req->input('train');
            $np->daiys=$req->input('day');
            $np->place_id=$ss->id;
           
            $np->save();
}
return redirect('/updatepackage');
       }
else{
        $ap= Place::all();
        $as= Subject::all();
      
         $p= Package::find($id);
         $arr=Array('package'=>$p,'alls'=>$as,'allp'=>$ap,'err'=>$er);
         return view('admin.editpackage',$arr);
}
     }
}
