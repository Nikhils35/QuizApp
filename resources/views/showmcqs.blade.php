@extends('adminbase')

@section('title', 'showmcqs')

@section('content')
@section('header', 'MCQs')

<div class="card p-3" style="width: 70%; ">
    <h3 class="card-title mb-2" style="color:#605b5b; font-weight:bold; font-size:16px">All MCQs 
        <a href="{{ url()->previous() }}" class="text-decoration-none float-right">
            <i class="fa-solid fa-circle-left"></i>Back</a>
    </h3>
    @if(session()->has('deletesuccess'))
    <div class="w-full text-left text-green-500 " style="font-size:14px;">
        {{ session('deletesuccess') }}</div>
    @endif
    <div class="card-body ">
        <table class="admin-table ">
            <thead>
                <tr>
                    <th>SN.</th>
                    <th>Question</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn=1; ?>
                @foreach($mcqs as $mcq)
                <tr>
                    <td><?php echo $sn; $sn++;?></td>
                    <td>{{$mcq->question}}</td>
                    <td class="d-flex">
                        <a href="/deletemcq/{{ $mcq->id }}" onclick="return confirm('Are you sure you want to delete this MCQ?')" class="btn" style="color:red;">
                            <i class="fa-solid fa-trash-can"></i></a>
                        <a href="/showMcqDetails/{{ $mcq->id }}" class="btn " style="color:blue;">
                            <i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        @if(count($mcqs)==0)
        <div class="w-full text-center text-red-500 pt-2" style="font-size:14px;">
            No questions added yet.</div>
        @endif
    </div>
    @if(session()->has('mcqDetails'))
    <div id="mcqdetails" class="card mcqdetails" style="position: absolute; top:30%; left:30%; width:400px;">
        <div class="w-full text-end text-red-500" style="font-size:18px; font-weight:600;"><i class="fa-solid fa-xmark"></i></div>
        <div class="card-body pt-0">
            <div class='w-full py-2' style="border-bottom:2px solid black;"><b>Q.</b>
             {{ ucfirst(session('mcqDetails')->question) }}</div>
            <div class='w-full py-2 mt-2'><b>A.</b> {{ ucfirst(session('mcqDetails')->a) }}</div>
            <div class='w-full py-2 mt-2'><b>B.</b> {{ ucfirst(session('mcqDetails')->b) }}</div>
            <div class='w-full py-2 mt-2'><b>C.</b> {{ ucfirst(session('mcqDetails')->c) }}</div>
            <div class='w-full py-2 mt-2'><b>D.</b> {{ ucfirst(session('mcqDetails')->d) }}</div>
            <div class='w-full py-2 mt-2'><b>Correct Ans.</b> {{ ucfirst(session('mcqDetails')->correct_ans) }}</div>
        </div>
    </div>
    @endif
</div>

<script>
    document.getElementById('mcqdetails')?.querySelector('.fa-xmark').addEventListener('click',function(){
        document.getElementById('mcqdetails').style.display='none';
    });
</script>
@endsection