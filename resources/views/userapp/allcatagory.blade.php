@extends('welcome')
@section('content')
<style>
.card-style {
    transition: transform ease-in-out 0.2s;
    cursor: pointer;
    width: 150px;
    height: 150px;
    font-weight: 600;
    /* padding:10px; */
}

.card-style img {
    width: 100%;
    height: 100%;
    /* object-fit:cover; */
}

.card-style:hover {
    transform: scale(1.1);
    box-shadow: 1px 1px 7px #a4a0ff;
}


.svg {
    color: #f67eceff;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.allcatagory-box {}

.aero {
    position: absolute;
    top: 0;
    right: 0;
    width: 30px;
    height: 30px;
    background-color: #a4a0ff;
    border-radius: 0px 5px 0px 10px;
    display: none;
    font-size: 12px;
    color: white;
}

.card-style:hover .aero {
    display: flex;
}

@media screen and (max-width:700px) {
    .card-style {
        width: 100px;
        height: 100px;
    }

    .aero {
        height: 20px;
        width: 20px;
        font-size: 8px;
        border-radius: 0px 5px 0px 5px;
    }
}

@media screen and (max-width:450px) {
    .card-style {
        width: 50px;
        height: 50px;
        font-size: 6px;
        padding: 5px !important;
    }

    .aero {
        height: 10px;
        width: 10px;
        font-size: 6px;
        border-radius: 0px 5px 0px 5px;
    }
}

</style>
<div>
    <x-searchBar></x-searchBar>
    <!-- ------------------------------------------------- -->
    <div class="mt-4">
        <div class="w-full px-5">
            <h3 class="d-inline" style="color:rgb(3 99 179);">Quiz Catagories</h3>
        </div>
        <div class=" d-flex flex-wrap gap-3 justify-content-center mt-4">
            @foreach($catagory as $cat)
            <a href="/cat_quizzes/{{$cat->id}}" class="text-decoration-none">
                <div class="card card-style allcatagory-box center text-center">
                    <!-- <img src="{{ asset('imgs/1.png') }}" alt=""> -->
                    <span class="aero center"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                    <div class="allcatagory-div">{{$cat->catagory}}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection