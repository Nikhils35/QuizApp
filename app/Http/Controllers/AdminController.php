<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use App\Models\Catagory;
use App\Models\Quiz;
use App\Models\Mcq;
use App\Models\Users;

class AdminController extends Controller
{
    function admin(Request $res){
        // echo $res->name;
        //  echo "<br>".$res->password."<br>";
        //  $data=DB::select("SELECT * FROM admins");
         
        // -------------------------------------------
        // echo $data=DB::table('admins')->where('name','admin')->get(); or ->first();
        // -------------------------------------------
        $validate=$res->validate([
            'name'=>'required',
            'password'=>'required '
        ]);
            $admin=Admin::where([
                ['name','=',$res->name],
                ['password','=',$res->password]
            ])->first();
            if($admin){
                Session::put('admin',$admin);
                return redirect('admindash');
            }else{
                $validate=$res->validate([
                    'user'=>'required'
                ],[
                    'user.required'=>'User Does not exists'
                ]);
                // return view('adminlogin');
            }
        
    }

    function admindash(){
        $admin=Session::get('admin');
        if($admin){
            return view('admindash',['admin'=>$admin]);
        }else{
            return redirect('adminlogin');
        }
    }

    function logout(){
        if(Session::has('admin')){
            Session::forget('admin');
            return redirect('adminlogin');
        }else {
            return redirect('adminlogin');
        }
    }

    function users(){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $users=Users::get();
            return view('users',['users'=>$users]);
        }
       
    }
    function deleteuser($id){
            $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $delete=Users::where('id',$id)->delete();
            if($delete){
                return redirect('users');
            }else{
                return redirect('users');
            }
        }
    }

    function catagories(){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $catagory=Catagory::get();
            return view('catagories',['catagory'=>$catagory]);
        }
       
    }

    function addcatagory(Request $res){
        $validate=$res->validate([
                    'catagory'=>'required | min:2 | unique:catagories,catagory'
        ],[
                    'catagory.required'=>'Please enter catagory name.',
                    'catagory.min'=>'Please enter minimum two charectors.',
                    'catagory.unique'=>'Catagory already exits.'
        ]);
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $adminid=Session::get('admin.id');
            $catagory=$res->catagory;
            $add=Catagory::insert([
                'catagory'=>$catagory,
                'userid'=>$adminid
            ]);
            if($add){       
                
                return redirect('catagories')->with('addsuccess', 'Catagory added!');
            }else{
                
                return redirect('catagories');
            }
        }
    }

    function deletecatagory($id){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{

            $name=Catagory::where([
                'id'=>$id
            ])->first('catagory');
            Catagory::where([
                'id'=>$id
            ])->delete();
            $name=$name->catagory;
        return redirect('catagories')->with('deletesuccess', ''.ucfirst($name). ', Catagory Deleted successfully!');
        }
    }

    function quiz(){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
        $catagories=Catagory::get();
        return view('quiz',['catagories'=>$catagories]);
        }
    }

    function addquiz(Request $res){
        $validate=$res->validate([
            'quiz'=>'required'
        ],[
            'quiz.required'=>'Empty field'
        ]);
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            
            if($res->quiz && $res->catagory && !session('quizdetails')){

            $query=Quiz::insert([
                'quiz'=>$res->quiz,
                'catagory_id'=>$res->catagory,
                'creator'=>$admin->name
            ]);
            if($query){
                $quizdetails=Quiz::where('quiz',$res->quiz)->first();
                Session::put('quizdetails',$quizdetails);
                $total=0;
                $quizid=$quizdetails->id;
                $total=Mcq::where('quiz_id',$quizid)->count();
                return redirect('quiz')->with([
                    'quizsuccess'=>'Quiz added successfully! Now you can add questions.',
                    'totalques'=>$total
                ]);
            }else{
                return redirect('quiz');
            } 


            }else{
                return redirect('quiz');
            }
        }
    }

    function addmcq(Request $res){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $quizdetails=Session::get('quizdetails');
            $validation=$res->validate([
                'question'=>'required',
                'ans1'=>'required',
                'ans2'=>'required',
                'ans3'=>'required',
                'ans4'=>'required',
                'correct_ans'=>'required'
            ],[
                'question.required'=>'Please enter your question',
                'ans1.required'=>'empty field',
                'ans2.required'=>'empty field',
                'ans3.required'=>'empty field',
                'ans4.required'=>'empty field',
                'correct_ans.required'=>'empty field'
            ]);
            $query=Mcq::insert([
                'quiz_id'=>$quizdetails->id,
                'question'=>$res->question,
                'a'=>$res->ans1,
                'b'=>$res->ans2,
                'c'=>$res->ans3,
                'd'=>$res->ans4,
                'correct_ans'=>$res->correct_ans,
                'admin_id'=>$admin->id,
                'catagory_id'=>$quizdetails->catagory_id
            ]);
            if($query){
                $total=0;
                $quizid=$quizdetails->id;
                $total=Mcq::where('quiz_id',$quizid)->count();
                Session::put('totalques',$total);
                if($res->submit=='add_next'){                 
                    return redirect('quiz')->with('quesAdded','Question added');
                }else{
                    Session::forget('quizdetails');
                    return redirect('quiz')->with('quizAdded','Quiz added successfully');
                }
            }else{
                return redirect('quiz');
            }
        }
        

    }

    function leave_quiz(){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            Session::forget('quizdetails');
            return redirect('quiz')->with('quizleaved','Quiz leaved');
        }
    }

    function showmcqs($id){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{ 
            $mcqs=Mcq::where('quiz_id',$id)->get();    
            return view('showmcqs',['mcqs'=>$mcqs]);
        }
    }

    function deletemcq($id){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{    
            Mcq::where('id',$id)->delete();
            return redirect()->back();
        }
    }
    function showMcqDetails($id){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{    
            $mcqDetails=Mcq::where('id',$id)->first();
            return redirect()->back()->with('mcqDetails',$mcqDetails);
        }
    }

    function quizlist(){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            $quizzes=Quiz::get();    
            return view('quizlist',['quizzes'=>$quizzes]);
        }
    }
    function deletequiz($id){
        $admin=Session::get('admin');
        if(!$admin){
            return redirect('adminlogin');
        }else{
            Quiz::where('id',$id)->delete();    
            return redirect()->back();
        }
    }
}