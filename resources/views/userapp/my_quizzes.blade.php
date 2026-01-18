@extends('welcome')
@section('content')
<div class="card mt-4 mx-auto">
    <div class="card-body">
        <h3 style="font-size:16px;color: #36c4e8">All Attempted Quizzes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Sn.</th>
                    <th>Quiz</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn=1; ?>
                @foreach($records as $e)
                <tr>
                    <td><?php echo $sn; $sn++; ?></td>
                    <td>{{$e->quiz}}</td>
                    <td>
                        @if($e->status==0)
                            <span style="color:red;font-weight:600;">Incomplete</span>
                        @else
                            <span style="color:green;font-weight:600;">Completed</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection