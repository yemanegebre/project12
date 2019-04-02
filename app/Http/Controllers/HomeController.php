<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;//is used to connect with database tabble
use App\student;
//namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use DB;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
class HomeController extends Controller
{
     //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
//this insert is used in the f<form action="/insert"> in registe.blade.php
     public function insert(Request $req)
    {
        
        $fname=$req->input('name');//name is textfield name
        $emails=$req->input('email');//email is textfield name
        $pass=$req->input('password');//password is textfield name
        //$fname=$req->input('name');
        //name1,email1,password1 are database table columnsarry(name1=>$fname,email1=>$email,password1=>$pass)
        $datas=array('name1'=>$fname,'email1'=>$emails,'password1'=>$pass);
        DB::table('register1')->insert($datas);
//DB is datanase manager
return back();//used to back after executed sucessfully on the start(registe.blade.php)

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
//for selcting vallues
public function selects()
{
    //'users1' is same as $users1 on the select.blade.php 
$users = DB::select('select * from register1');
return view('select',['users1'=>$users]);
}

//end selection
//for updating values
/*
public function updates(){
$users = DB::select('select * from register1');
return view('update',['users'=>$users]);
}
public function show($id) {
$users = DB::select('select * from register1 where id = ?',[$id]);
return view('update',['users'=>$users]);
}
public function edit(Request $request,$id) {
$name =$request->input('name1');
$email=$request->input('email1');
$pass =$request->input('password1');
//$email = $request->input('email');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
DB::update('update register1 set name1 = ?,email1=?,password1=? where id = ?',[$name,$email,$pass,$id]);
echo "Record updated successfully.
";
echo 'Click Here to go back.';
}
//end for updating values
*/
public function try(Request $req)
{


$req->session()->put('name',$req->input('name'));
return view('layout.about')->with('name',$req->session()->get('name'));


}
//2nd update
public function indexs1() {
      $users = DB::select('select * from register1');
      return view('edits1',['users'=>$users]);
   }
   public function shows1($id) {
      $users = DB::select('select * from register1 where id = ?',[$id]);
      return view('updates1',['users'=>$users]);
   }
   public function edits1(Request $request,$id) {
      $name = $request->input('name1');
      DB::update('update register1 set name1 = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edits1">Click Here</a> to go back.';
   }


//end 2nd update
//redirect and logout from apage
   public function login2(Request $request )
   {
$request->session()->flush();
     
    return redirect('/login');
   }


   //endredirect

//delete 2nd
 public function index3() {
      $users = DB::select('select * from register1');
      return view('delete',['users'=>$users]);
   }
   public function destroy($id) {
      DB::delete('delete from register1 where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/deletes">Click Here</a> to go back.';
   }
//end delete 2nd
/*
//deleting values
"color:red"> "color:mediumblue">public "color:mediumblue">function index1(){
"color:red"> $users = DB::select("color:brown">'select * from register1');
"color:red"> "color:mediumblue">return view("color:brown">'delete',["color:brown">'users'=>$users]);
"color:red"> }
"color:red"> "color:mediumblue">public "color:mediumblue">function destroy1($id) {
"color:red"> DB::delete("color:brown">'delete from register1 where id = ?',[$id]);
"color:red"> "color:mediumblue">echo "color:brown">"Record deleted successfully.
";
"color:red"> "color:mediumblue">echo "color:brown">'Click Here to go back.';
"color:red"> }


*/

//end deleting
    //next
    /*
public function insertform(){
return view('stud_create');
} 
public function insert(Request $request){
$name = $request->input('name1');
$email = $request->input('email1');
$pass = $request->input('password1');
//$email = $request->input('email');
$data=array('name1'=>$name,"email1"=>$email,"password1"=>$pass);
DB::table('register1')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/insert">Click Here</a> to go back.';
}
*/
   //nextend
}
