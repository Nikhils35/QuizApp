@extends('welcome')
@section('content')
<style>
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
.div-menu-head{
    display: flex;
    flex-direction:column;
    /* justify-content: center; */
    align-items: flex-end;
    padding: 5px;
    padding-left: 20px;
    cursor: pointer;
}
.div-menu-head:hover #menu-ul{
    display:flex;
}
.div-menu {
    width: 30px;
    height: 30px;
    box-sizing: border-box;
    /* background-color: rgb(240 241 243); */
    border-radius: 5px;
    border: 2px solid transparent;
    color: rgb(20 110 190);
}

.div-menu-head:hover .div-menu{
    background-color: white;
    border: 2px solid rgb(129, 171, 250);
}

.div-menu-in {
    border-radius: 5px;
    padding: 5px;
    width: 30px;
    height: 30px;
    
}

.div-menu-in svg {
    width: 20px;
    height: 20px;
}
#menu-ul{
    list-style: none;
    border: 1px solid rgb(129, 171, 250); 
    border-radius:5px;
    color: rgb(20 110 190);
    padding:10px;
    background-color: rgb(240 241 243);
    position:absolute;
    top:52px;
    right: 20px;
    display: none;
}
#menu-ul li a{
    text-decoration:none;
    color: rgb(20 110 190);
    font-weight: 500;
}

</style>
<div class="card mt-4 mx-auto">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h3 style="font-size:16px;color: #36c4e8">All Attempted Quizzes</h3>
            <div class="div-menu-head ">
                <div class="center div-menu">
                    <div class="div-menu-in"><svg data-prefix="fas" data-icon="grid-2" role="img" viewBox="0 0 448 512"
                            aria-hidden="true" class="svg-inline--fa fa-grid-2 fa-lg">
                            <path fill="currentColor"
                                d="M192 80c0-26.5-21.5-48-48-48L48 32C21.5 32 0 53.5 0 80l0 96c0 26.5 21.5 48 48 48l96 0c26.5 0 48-21.5 48-48l0-96zm0 256c0-26.5-21.5-48-48-48l-96 0c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48l96 0c26.5 0 48-21.5 48-48l0-96zM256 80l0 96c0 26.5 21.5 48 48 48l96 0c26.5 0 48-21.5 48-48l0-96c0-26.5-21.5-48-48-48l-96 0c-26.5 0-48 21.5-48 48zM448 336c0-26.5-21.5-48-48-48l-96 0c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48l96 0c26.5 0 48-21.5 48-48l0-96z"
                                class=""></path>
                        </svg></div>
                </div>
                <ul id="menu-ul">
                    <li><a href="/clear_my_history" onclick="return confirm('Are you sure.')" >Clear history</a></li>
                </ul>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Sn.</th>
                    <th>Quiz</th>
                    <th>Status</th>
                    <th>Action</th>
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
                    <td>
                        @if($e->status==0)
                        <a href="/continue/{{$e->id}}" class="btn btn-success">Continue</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection