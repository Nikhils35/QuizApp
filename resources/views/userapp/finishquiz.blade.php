@extends('welcome')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="card p-4">
                <!-- <a href="{{url('/')}}" class="btn btn-primary">Go to Home</a> -->
                <h3 class="mb-4">Quiz Finished!</h3>
                <p class="" style="font-weight:500;font-size:20px;"><span style="color:red">{{$correct_mcqs}}</span> out of <span style="color:red">{{$total_mcqs}}</span></p>
                <p class="mb-4">Thank you for completing the quiz.</p>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Question</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sn=1; ?>
                            @foreach($mcq_records as $mcq)
                            <tr>
                                <td><?php echo $sn; $sn++; ?></td>
                                <td class="text-start">{{$mcq->question}}</td>
                                <td>
                                    @if($mcq->is_correct==0)
                                    <span style="color:red;font-weight:600;">Incorrect</span>
                                    @else
                                    <span style="color:green;font-weight:600;">Correct</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection