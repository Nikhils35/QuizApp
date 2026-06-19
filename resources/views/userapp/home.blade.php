@extends('welcome')
@section('content')
<style>
    .content-wrapper {
      flex: 1;
      background-color: #f8f9fa;
    }

    /* demo page sections - just to show how footer adapts */
    .hero-section {
      max-width: 1280px;
      margin: 0 auto;
      padding: 3rem 2rem 2rem;
      text-align: center;
    }

    .quiz-preview {
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(2px);
      border-radius: 2rem;
      padding: 2rem;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
      margin-bottom: 2rem;
    }

    .quiz-card {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: center;
      margin-top: 2rem;
    }

    .card-f {
      background: white;
      border-radius: 1.5rem;
      padding: 1.5rem;
      width: 240px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      transition: all 0.2s ease;
    }

    .card-f i {
      font-size: 2.2rem;
      color: #3b82f6;
      margin-bottom: 1rem;
    }

    .card-f h3 {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }

    .btn-soft {
      background: #eef2ff;
      border: none;
      padding: 0.5rem 1.25rem;
      border-radius: 2rem;
      font-weight: 500;
      color: #2563eb;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 1rem;
      text-decoration: none;
    }

    .btn-soft:hover {
      background: #dfe7ff;
    }
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
<div class="container">
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
<div class="content-wrapper">
  <section class="hero-section">
    <div class="quiz-preview">
      <h1>🧠 QuizApp</h1>
      <p class="sub">Challenge your mind, track your progress, and have fun — all in one sleek platform.</p>
      <div class="quiz-card">
        <div class="card-f">
          <i class="fas fa-brain"></i>
          <h3>Trivia Blitz</h3>
          <p>Test your general knowledge</p>
          <a href="/cat_quizzes/{{$catagory[7]->id}}" class="btn-soft">Start Quiz →</a>
        </div>
        <div class="card-f">
          <i class="fas fa-code"></i>
          <h3>Tech Quiz</h3>
          <p>Programming & Dev insights</p>
          <a href="/cat_quizzes/{{$catagory[12]->id}}" class="btn-soft">Start Quiz →</a>
        </div>
        <div class="card-f">
          <i class="fas fa-globe"></i>
          <h3>Geography</h3>
          <p>Explore world <br/> capitals</p>
          <a href="/cat_quizzes/{{$catagory[3]->id}}" class="btn-soft">Start Quiz →</a>
        </div>
      </div>
    </div>
    <p style="font-size: 0.85rem; color: #4b5563;"><i class="fas fa-arrow-down"></i> Scroll down to see the premium footer</p>
  </section>
</div>
<x-footer></x-footer>
@endsection