<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Catagory;
use App\Models\Quiz;
use App\Models\Mcq;
use App\Models\Record;
use App\Models\Mcq_record;
class UserController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function home(){
        $catagory=Catagory::get();
        return view('userapp/home',['catagory'=>$catagory]);
    }

    function signup(){
        if(session()->has('user')){
            return redirect('/');
        }else{
            return view('userapp/signup');
        }
    }

    function login(){
        if(session()->has('user')){
            return redirect('/');
        }else{
            return view('userapp/login');
        }
    }
    // --------------------------
    function usersignup(Request $req){
        $valid=$req->validate([
            'username'=>'required',
            'email'=>'required | unique:users,email',
            'password'=>'required'
        ]);
        $query=Users::insert([
            'username'=>$req->username,
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        if($query){
            return redirect('login')->with('success','Signup successfully now you can login...');
        }
    }
    function userlogin(Request $req){
        $valid=$req->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $user=Users::where([
            ['username','=',$req->username],
            ['password','=',$req->password]
        ])->first();
        if($user){
            Session::put('user',$user);
            return redirect('/');
        }else{
            $validate=$req->validate([
                    'user'=>'required'
                ],[
                    'user.required'=>'User Does not exists'
                ]);
        }
    }

    function userlogout(){
        if(Session::has('user')){
            Session::forget('user');
            return redirect('login')->with('success','Logged out successfully');
        }else {
            return redirect('login');
        }
    }
    function allcatagory(){
        if(!Session::has('user')){
            return redirect('login');
        }else{
            $catagory=Catagory::get();
            return view('userapp/allcatagory',['catagory'=>$catagory]);
        }
    }
    function cat_quizzes($id){
        if(!Session::has('user')){
            return redirect('login');
        }else{
            $catagory=Catagory::where('id',$id)->first();
            $quizzes=Quiz::where('catagory_id',$id)->get();
            // $quizid=$quizzes->pluck('id');
            return view('userapp/cat_quizzes',['quizzes'=>$quizzes,'catagory'=>$catagory]);
        }
    }
    function playquiz($id,$cat_id){
        if(!Session::has('user')){
            return redirect('login');
        }else{
            $record=Record::insert([
                'quiz_id'=>$id,
                'user_id'=>Session::get('user')->id,
                'status'=>0
            ]);
            if($record){
            $mcqs=Mcq::where('quiz_id',$id)->get();
            Session::put([
            'record_id'=>Record::latest()->first()->id,
            'mcqs' => $mcqs,
            'current' => 0
            ]);
            // $cat=Catagory::where('id',$cat_id)->first();
            return redirect()->route('show.mcqs');
        }
        }
    }

    function showmcqs(){
        $mcqs = Session::get('mcqs');
        $current = Session::get('current');

        if ($current >= count($mcqs)) {
            return redirect()->route('finishquiz');
        }

        return view('userapp/playquiz', [
            'mcqs' => $mcqs[$current],
            'index' => $current + 1,
            'total' => count($mcqs)
        ]);
    }

    function nextmcq(Request $req){
        $valid=$req->validate([
        'option'=>'required',
    ],[
        'option.required'=>'Please select an option to proceed.',
    ]);
        $current = Session::get('current');
        Session::put(['current' => $current + 1]);
        $record_id=Session::get('record_id');
        $user_id=Session::get('user')->id;
        $mcq_id=$req->submit;
        $selected_ans=$req->option;
        $current_mcq=Mcq::where('id',$mcq_id)->first();
        $correct_ans=$current_mcq->correct_ans;
        if($selected_ans==$correct_ans){
            $is_correct=1;
        }else{
            $is_correct=0;
        }
        $mcq_record=Mcq_record::insert([
            'record_id'=>$record_id,
            'mcq_id'=>$mcq_id,
            'user_id'=>$user_id,
            'selected_ans'=>$selected_ans,
            'is_correct'=>$is_correct
        ]);
        if($mcq_record){
            return redirect()->route('show.mcqs');
        }else{
            return "some error occured";
        }
    }

    function finishquiz(){
        $record_id=Session::get('record_id');
        $status=Record::where('id',$record_id)->update([
            'status'=>1
        ]);
        $record=Record::where('id',$record_id)->first();
        $mcq_records=Mcq_record::WithMcq()->where('record_id',$record_id)->get();
        $total_mcqs=count($mcq_records);
        $correct_mcqs=Mcq_record::where([
            ['record_id','=',$record_id],
            ['is_correct','=',1]
        ])->count();

        Session::forget('mcqs');
        Session::forget('current');
        Session::forget('record_id');
        return view('userapp/finishquiz',[
            'mcq_records'=>$mcq_records,
            'total_mcqs'=>$total_mcqs,
            'correct_mcqs'=>$correct_mcqs
        ]);
    }

    function my_quizzes(){
        if(!Session::has('user')){
            return redirect('login');
        }else{
            $user_id=Session::get('user')->id;
            $records=Record::WithQuiz()->where('user_id',$user_id)->get();
            return view('userapp/my_quizzes',['records'=>$records]);
        }
    }

    public function search(Request $request)
    {
        $query = $request->get('q');

        if (!$query) {
            return response()->json([]);
        }

        $products = Quiz::where('quiz', 'LIKE', "%{$query}%")
            ->limit(5)
            ->get();

        return response()->json($products);
    }

    function searchquiz(Request $req){
        if(!Session::has('user')){
            return redirect('login');
        }else{
            $valid=$req->validate([
                'inp'=>'required'
            ]);
            $data=$req->inp;
            $quizzes = Quiz::where('quiz', 'LIKE', '%' . $data . '%')
                    //  ->orWhere('email', 'LIKE', '%' . $searchText . '%')
                     ->limit(50)
                     ->get();

            // return view('search-result', compact('users', 'searchText'));
            return view('userapp/quizzes',['quizzes'=>$quizzes]);
        }
    }

}
