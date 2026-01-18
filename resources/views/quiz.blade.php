@extends('adminbase')

@section('title', 'Quiz')

@section('content')
@section('header', 'Quiz')
<div class="w-full " style="display: flex; justify-content: center;">
    @if(!session('quizdetails'))
    <div class="card" style="width: 30%; ">
        <div class="card-body text-center">
            <h3 class="card-title " style="color:#605b5b; font-weight:bold;">Add Quiz</h3>
            <div class="card-text">
                <form action="/addquiz" method="post">
                    @csrf
                    @if(session()->has('addsuccess'))
                    <div class="w-full text-left text-green-500 " style="font-size:14px;">
                        {{ session('addsuccess') }}
                    </div>
                    @endif
                    @if(session()->has('quizAdded'))
                    <div class="w-full text-left text-green-500 " style="font-size:14px;">
                        {{ session('quizAdded') }}
                    </div>
                    @endif
                    @if(session()->has('quizleaved'))
                    <div class="w-full text-left text-orange-500 " style="font-size:14px;">
                        {{ session('quizleaved') }}
                    </div>
                    @endif



                    <label class="w-full text-left mt-3" for="">Enter quiz name</label>
                    <input type="text" class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none '
                        name="quiz" placeholder="Enter quiz name">
                    @error('quiz')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    @enderror
                    <label class="w-full text-left mt-3" for="selectcat">Select catagory</label>
                    <select name="catagory" id="selectcat"
                        class="w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mb-3">
                        @foreach($catagories as $cat)
                        <option value="{{$cat->id}}">{{ ucfirst($cat->catagory) }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-success my-3 w-full">Add</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------ -->
    @else

    <div class="card d-flex flex-row" style="width: 70%; ">
        <div class="card-body" style="width:50%">
            <h3 class="card-title text-center" style="color:#605b5b; font-weight:bold;">
                Quiz Details
            </h3>
            <div class="card-text">
                @if(session()->has('quizdetails'))
                <span style="color:green; font-weight:600">Quiz : </span>
                <span style="color:green">{{ ucfirst(session('quizdetails')->quiz) }}</span>
                @endif

                <p class="text-red-500" style="font-size:16px">Total MCQs :
                    @if(session()->has('totalques'))
                    <span class="text-red-500" style="font-size:16px">{{session('totalques')}}</span>
                    @endif
 
                </p>
                @if(session('totalques')>0)

                <a href="/showmcqs/{{ session('quizdetails')->id }}" class="text-orange-500">Show MCQs</a>
                @endif
            </div>
            <div>
                <a href="/leave_quiz" class="btn btn-danger my-3 w-full">
                    Leave quiz</a>
            </div>
        </div>
        <div class="card-body " style="width:50%">
            <h3 class="card-title text-center" style="color:#605b5b; font-weight:bold;">Add Question</h3>
            @if(session()->has('quesAdded'))
            <span style="color:green">{{session('quesAdded')}}</span>
            @endif
            <div class="card-text">
                <form action="/addmcq" method="post">
                    @csrf
                    @if(session()->has('addsuccess'))
                    <div class="w-full text-left text-green-500 " style="font-size:14px;">{{ session('addsuccess') }}
                    </div>
                    @endif

                    <label class="w-full text-left mt-3" for="">Enter Question</label>
                    <textarea class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none'
                        name="question" id="question"></textarea>

                    @error('question')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    <style>
                    #question {
                        border: 2px solid red !important;
                    }
                    </style>
                    @enderror

                    <input type="text" id="ans1"
                        class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mt-3'
                        placeholder="Option A" name="ans1">
                    @error('ans1')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    <style>
                    #ans1 {
                        border: 2px solid red !important;
                    }
                    </style>
                    @enderror
                    <input type="text" id="ans2"
                        class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mt-3'
                        placeholder="Option B" name="ans2">
                    @error('ans2')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    <style>
                    #ans2 {
                        border: 2px solid red !important;
                    }
                    </style>
                    @enderror
                    <input type="text" id="ans3"
                        class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mt-3'
                        placeholder="Option C" name="ans3">
                    @error('ans3')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    <style>
                    #ans3 {
                        border: 2px solid red !important;
                    }
                    </style>
                    @enderror
                    <input type="text" id="ans4"
                        class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mt-3'
                        placeholder="Option D" name="ans4">
                    @error('ans4')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    <style>
                    #ans4 {
                        border: 2px solid red !important;
                    }
                    </style>
                    @enderror

                    <label class="w-full text-left mt-3" for="selectcat">Select answer</label>
                    @error('correct_ans')
                    <div class="w-full text-right text-red-500 " style="font-size:14px;">{{$message}}</div>
                    @enderror
                    <select name="correct_ans" id="selectopt"
                        class="w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none mb-3">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
                    <button name="submit" value="add_next" class="btn btn-primary my-3 w-full">Add & next</button>
                    <button name="submit" value="submit" class="btn btn-success my-3 w-full">Add & submit</button>
                </form>
            </div>


        </div>
    </div>
    @endif
    <!-- ------------------------------------------------------------------------------ -->
</div>
@endsection