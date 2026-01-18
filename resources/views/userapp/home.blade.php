@extends('welcome')
@section('content')
<style>
.card-style {
    width: 150px;
    height: 150px;
    transition: transform ease-in-out 0.2s;
    cursor: pointer;

}

.card-style img {
    width: 100%;
    height: 100%;
    /* object-fit:cover; */
}

.card-style:hover {
    transform: scale(1.1);
    box-shadow: 1px 1px 2px gray;
}



.svg {
    color: #f67eceff;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-div {
    width: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    align-items: center;
}

.main-a,
.main-b {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    gap: 20px;
    justify-content: center;
}

@media screen and (max-width:1200px) {
    .card-style {
        width: 130px;
        height: 130px;
    }
}

@media screen and (max-width:1000px) {
    .card-style {
        width: 100px;
        height: 100px;
    }
}

@media screen and (max-width:800px) {
    .card-style {
        width: 70px;
        height: 70px;
    }
}

@media screen and (max-width:700px) {
    .search-box input {
        width: 200px;
    }

    .main-a,
    .main-b {
        gap: 10px;
    }

    .main-div {
        gap: 10px;
    }

}

@media screen and (max-width:550px) {
    .card-style {
        width: 60px;
        height: 60px;
    }
}

@media screen and (max-width:450px) {
    .card-style {
        width: 50px;
        height: 50px;
    }
}

@media screen and (max-width:380px) {
    .card-style {
        width: 50px;
        height: 50px;
    }

    .main-a,
    .main-b {
        gap: 5px;
    }

    .main-div {
        gap: 5px;
    }
}


</style>
<div>
    <x-searchBar></x-searchBar>
    <!-- ------------------------------------------------- -->
    <div class="mt-4">
        <div class="w-full px-5">
            <h3 class="d-inline" style="color:rgb(3 99 179);">Quiz Catagories</h3> <a href="/allcatagory"
                class="text-decoration-none" style="float:right;color:rgb(3 99 179);cursor:pointer;font-weight:600">View all
                <i class="ps-1 fa-solid fa-arrow-up-right-from-square " style="color:rgb(253 121 8)"></i></a>
        </div>
        <div class="main-div  m-auto  mt-4">
            <div class="main-a">
                <a href="/cat_quizzes/{{$catagory[0]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/maths.png') }}" alt="">
                    </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[1]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/2.png') }}" alt="">
                    </div>
                </a>
                <!-- <div class="card card-style p-2 text-center">
            <img src="{{ asset('imgs/3.png') }}" alt=""></div> -->
                <a href="/cat_quizzes/{{$catagory[2]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/4.png') }}" alt="">
                    </div>
                </a>
                <!-- <div class="card card-style p-2 text-center">
            <img src="{{ asset('imgs/5.png') }}" alt=""></div> -->
                <a href="/cat_quizzes/{{$catagory[3]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/geo.png') }}" alt="">
                    </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[4]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/eng.png') }}" alt="">
                    </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[5]->id}}" class="text-decoration-none">
                    <div class="card card-style p-2 text-center">
                        <img src="{{ asset('imgs/sports.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="main-b">
                <a href="/cat_quizzes/{{$catagory[6]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/9.png') }}" alt="">
                </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[7]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/10.png') }}" alt="">
                </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[8]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/11.png') }}" alt="">
                </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[9]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/12.png') }}" alt="">
                </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[10]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/13.png') }}" alt="">
                </div>
                </a>
                <a href="/cat_quizzes/{{$catagory[11]->id}}" class="text-decoration-none">
                <div class="card card-style p-2 text-center">
                    <img src="{{ asset('imgs/14.png') }}" alt="">
                </div>
                </a>


            </div>
        </div>
    </div>
</div>

 <!-- <x-footer></x-footer> -->

@endsection