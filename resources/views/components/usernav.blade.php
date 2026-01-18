<style>
.z-in-nav{
  z-index: 5;
}
.main-nav li a{
  color: #1cb5e0;
  font-weight: 500;
  transition: transform ease-in-out 0.3s;
}
.main-nav li a:hover{
  color: #00799b;
  transform: translateY(-7px);
}

</style>

<nav class=" z-in-nav navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img height="50px" src="{{ asset('imgs/logo.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Quiz</a>
        </li> -->
        @if(session()->has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/my_quizzes">My_Quizzes</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/allcatagory">Catagories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        @if(!session()->has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        @endif
        @if(session()->has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/userlogout">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-5" style="color:rgb(3 99 179)">Welcome, {{ ucfirst(session('user')->username) }}</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>


