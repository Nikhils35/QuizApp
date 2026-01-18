@extends('adminbase')

@section('title', 'Users')

@section('content')
@section('header', 'Users List')

<div>
    <div class="card p-3">
        <div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> <?php $sn=1; ?>
                        @foreach($users as $user)
                        <tr>
                            <td><?php echo $sn; $sn++; ?></td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <a href="/edituser/{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/deleteuser/{{ $user->id }}" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection