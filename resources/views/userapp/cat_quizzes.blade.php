@extends('welcome')
@section('content')
<style>
    .cat-quiz-card{
      background: #ffffffff;
      padding:20px;
      border-radius:12px;
      box-shadow:0 4px 10px rgba(0,0,0,0.05)
    }
    .cat-quiz-card h3{color:#475569;font-size:18px}
 
    /* Table */
    .cat-quiz-table-box{
      background:#fff;
      padding:20px;
      border-radius:12px;
      box-shadow:0 4px 10px rgba(0,0,0,0.05)
    }
    .cat-quiz-table{width:100%;border-collapse:collapse}
    .cat-quiz-table th,.admin-table td{padding:12px;border-bottom:1px solid #e5e7eb;text-align:left}
    .cat-quiz-table th{background:#f1f5f9}
    .cat-quiz-table tr:hover{background:#f9fafb}

</style>
<div>
    <div class="cat-quiz-card mt-4">
        <h3 style="color: rgb(3 99 179)">Quizzes in {{$catagory->catagory}}</h3>
        <table class="cat-quiz-table">
            <thead>
                <tr>
                    <th>Sn.</th>
                    <th>Quiz</th>
                    <!-- <th>Total Mcqs</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn=1; $i=0; ?>
                @foreach($quizzes as $quiz)
                <tr>
                    <td><?php echo $sn; $sn++; ?></td>
                    <td>{{$quiz->quiz}}</td>
                    <!-- <td>kjh</td> -->
                    <td><a href="/playquiz/start/{{$quiz->id}}/{{$quiz->catagory_id}}" 
                    onclick="return confirm('Click ok to start the quiz.')" class="text-decoration-none">Play Quiz  <i class="ps-1 fa-solid fa-play"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection