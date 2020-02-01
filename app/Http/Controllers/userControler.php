<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_user;
use App\Package;
use App\Place;
use App\Subject;
use\App\Order;
use \Illuminate\Support\Facades\DB;
class userControler extends Controller
{
    //sign up
    
    
    public function add_user(Request $req){
   $fnameErr =$lnameErr= $emailErr =$repassErr= "";
        if($req->isMethod('post')){
$user = Data_user::where('email',$req->input('email'))->first();
if ($user != null) {
  $emailErr="This site already exists"; 
}
 if($req->input('password')!=$req->input('repassword')){
                  
                 $repassErr="Thats not same password ";
     }
     if(!preg_match("/^[a-zA-Z ]*$/",$req->input('lname'))) {
      $lnameErr = "Only letters and white space allowed"; 
    
       }
      if(!preg_match("/^[a-zA-Z ]*$/",$req->input('fname'))) {
      $fnameErr = "Only letters and white space allowed"; 
    
       }
       if($emailErr==""&&$fnameErr==""&&$repassErr==""&&$lnameErr==""){
            $u=new Data_user();
            $u->fname=$req->input('fname');
            $u->lname=$req->input('lname');
            $u->email=$req->input('email');
            $u->password=$req->input('password');
             $u->phone=$req->input('pnomber');
              $u->city=$req->input('city');
              $u->save();
              session()->push('user', $u);
              return redirect('/home');
       }
 else {
           $arr=Array('ee'=>$emailErr,'fe'=>$fnameErr,'le'=>$lnameErr,'rp'=>$repassErr);
        return view('user.signup',$arr); 
       }
   
        }
 else {
        $arr=Array('ee'=>$emailErr,'fe'=>$fnameErr,'le'=>$lnameErr,'rp'=>$repassErr);
        return view('user.signup',$arr);
 }
    }
    //login
    
    
    
     public function check_data_user(Request $req){
         
          $u = Data_user::where('email',$req->input('email'))->where('password',$req->input('pass'))->first();
          if($u ==null){
              return view('user.login',['id'=>null]);
          }
          else{
              session()->push("user", $u);
              return redirect('/home');
          }
        
       

        
     }
     public function login_home(){
         if(session()->has('user')){
             return redirect('home');
         }
         else{
         return view('user.login',['id'=>null]);
         }
     }
     public function login_book($id){
           if(session()->has('user')){
             return redirect('home');
         }
         else{
         return view('user.login',['id'=>$id]);
         }
        
         }

  public function book($id){
         
       $user= Package::find($id);   
           $as1= Place::find($user->place_id);
           $as2= Subject::find($user->subject_id);
           return view('user.pakage_data',['id'=>$user,'id1'=>$as1->place_name ,'id2'=>$as2->subject_name]) ;
         }

     public function checkdata_backage(Request $req,$id){
         $u = Data_user::where('email',$req->input('email'))->where('password',$req->input('pass'))->first();
          if($u ==null){
              return view('user.login',['id'=>$id]);
          }
          else{
           session()->push("user", $u);
           $user= Package::find($id);   
           $as1= Place::find($user->place_id);
           $as2= Subject::find($user->subject_id);
          return view('user.pakage_data',['id'=>$user,'id1'=>$as1->place_name,'id2'=>$as2->subject_name]) ;
          }
     }
       public function get_logout(){
           session()->forget('user');
           return redirect('/home');
       }
      public function booking($id){
          $user= Package::find($id);   
          $as1= Place::find($user->place_id);
           $as2= Subject::find($user->subject_id);
           $e=session()->get('user');
           return view('user.book',['id1'=>$user,'id2'=>$as1,'id3'=>$as2,'id4'=>$e]);
       }
     public function home(){
        $user= DB::table('places')->join('packages','packages.place_id','places.id')->join('subjects','subjects.id','packages.subject_id')->get(); 
       $arr=Array('user'=>$user);
     
            return view('user.home',$arr);
       }
       
       
          public function search(Request $req){
              
               
           $user="";
          if($req->input('pa')==""&&$req->input('su')!=""){
          $user= DB::table('places')->
          join('packages','packages.place_id','places.id')->
          join('subjects','subjects.id','packages.subject_id')->
          where('subject_name',$req->input('su'))->get();
    
          }
          elseif($req->input('pa')!=""&&$req->input('su')==""){
          $user= DB::table('places')->
          join('packages','packages.place_id','places.id')->
          join('subjects','subjects.id','packages.subject_id')->
          where('place_name',$req->input('pa'))->get();
         
          }
          elseif($req->input('pa')!=""&&$req->input('su')!=""){
          $user= DB::table('places')->
          join('packages','packages.place_id','places.id')->
          join('subjects','subjects.id','packages.subject_id')->
          where('place_name',$req->input('pa'))-> where('subject_name',$req->input('su'))->get();
           
          }
          return view('user.searsh',['user'=>$user]);
    
       }
       public function ticket(Request $r,$id){
          $e=Package::find($id);
          $e1= Place::find($e->place_id);
          $e2= Subject::find($e->subject_id);
         $t= $r->input('pr');
         $n=$r->input('ad');
           $u=$e->$t;
           $d=session()->get('user')[0] ;
           $or=new Order();
           $or->package_id=$id;
           $or->user_id=$d->id;
           $or->to_zip=$r->input('zip');
           $or->member_nomber=$r->input('ad');
           $or->total_price=$u*$n;
           $or->save();
           return view('user.tecket',['id1'=>$e,'id2'=>$e1,'id3'=>$e2,'id4'=>$or,'id5'=>$t]);
       }
}
