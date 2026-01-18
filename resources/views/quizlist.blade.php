@extends('adminbase')

@section('title', 'QuizList')

@section('content')
@section('header', 'Quiz List')
<div class="card">
    <div class="card-body">
    <table class="admin-table card-text">
        <thead>
            <tr>
                <th>SN.</th>
                <th>Quiz Name</th>
                <!-- <th>Category</th> -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->count() }}</td>
                <td>{{ $quiz->quiz }}</td>
                
                <td>
                    <a href="/showmcqs/{{ $quiz->id }}" class="btn btn-primary btn-sm">view</a>
                    <a href="/deletequiz/{{ $quiz->id }}" class="btn btn-danger btn-sm" 
                    onclick="return confirm('Are you sure you want to delete this quiz?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection