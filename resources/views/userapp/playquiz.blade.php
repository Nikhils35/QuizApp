@extends('welcome')
@section('content')
<style>
.ques-div {
    border-radius: 5px;
    /* background-color: #e1fcf6ff; */
    background-color: #e3f2fd;
}

.ques {
    font-weight: 500;
}

.span-0 {
    font-weight: 600;
    font-size: 20px;
    color: blue;
}
.span-1 {
    font-weight: 500;
    font-size: 20px;
    color: blue;
}

.opt-div {
    border-radius: 5px;
    background-color: #ffffffff;
    display:flex;
    align-items:center;
    justify-content:space-between;
}
.opt-div:hover{
    background-color: #eeeeff;
}
.a1 {
    font-weight: 500;
}

.a11 {
    color: red;
    font-weight: 500;
}
.options{
    float:right;
}
/* input[type="radio" i] {
    width: 20px;
    height:20px;
} */

.icon-radio input {
  display: none;
}

.icon-radio i {
  font-size: 20px;
  color: gray;
}

.icon-radio input:checked + i {
  color: #9d9dffff;
}
.opt-div:has(input:checked) {
  background-color: #eeeeff;
  border-color: #2196f3;
}
.mcq-div{
    width: 50%;
}
@media screen and (max-width:1000px) {
    .mcq-div{
    width: 80%;
}
}
@media screen and (max-width:500px) {
    .mcq-div{
    width: 90%;
}
}
</style>
<div class="">
    <div class="card p-3 mt-3 mcq-div mx-auto">
        <div style="color: rgb(3 99 179);font-size:22px; font-weight:500;" class="">Quiz</div>
        <div class="w-100 text-end a1"><span class="a11">Quizzes :</span>
        <span>{{ $index }}</span><span class="a11">/</span><span>{{ $total }}</span></div>
        <form action="playquiz/next" method="post">
        @csrf
        <div class=" ques-div border border-gray p-2 my-3">
            <span class="pe-2 span-0">Q.</span>
            <span class="ques">{{$mcqs->question}}</span>
        </div>
        @error('option')
            <div class="text-danger mb-2">{{ $message }}</div>
        @enderror
        <label id="a" class="opt-div border border-gray p-2 mb-2 icon-radio">
            <span class="pe-2 span-1 text-black">A.</span>
            <span style="font-weight:500">{{$mcqs->a}}</span>
            <input type="radio" name="option" value="a" class="options">
            <i class="fa fa-circle-check"></i>
        </label>
        <label id="b" class="opt-div border border-gray p-2 mb-2 icon-radio">
            <span class="pe-2 span-1 text-black">B.</span>
            <span style="font-weight:500">{{$mcqs->b}}</span>
            <input type="radio" name="option" value="b" class="options">
            <i class="fa fa-circle-check"></i>
        </label>
        <label id="c" class="opt-div border border-gray p-2 mb-2 icon-radio">
            <span class="pe-2 span-1 text-black">C.</span>
            <span style="font-weight:500">{{$mcqs->c}}</span>
            <input type="radio" name="option" value="c" class="options">
            <i class="fa fa-circle-check"></i>
        </label>
        <label id="d" class="opt-div border border-gray p-2 mb-2 icon-radio">
            <span class="pe-2 span-1 text-black">D.</span>
            <span style="font-weight:500">{{$mcqs->d}}</span>
            <input type="radio" name="option" value="d" class="options">
            <i class="fa fa-circle-check"></i>
        </label>

        <div class="w-100 text-end mt-3">
            <button name="submit" value="{{$mcqs->id}}" type="submit" class="btn btn-success ">Next <i class="fa-solid fa-right-from-bracket"></i>
        </button>
        </div>
    </form>
    </div>
</div>

<script>
    let radios=document.querySelectorAll('.options');
    let mcqs=@json($mcqs);
    console.log(mcqs);
    radios.forEach(radio => {
    radio.addEventListener("change", function () {
      const selectedAnswer = this.value;
      // Sabhi radio disable
      //radios.forEach(r => r.disabled = true);
        radios.forEach(r => {
  if (r.value !== selectedAnswer) {
    r.disabled = true;
  }
});
        // Correct option green
        if (selectedAnswer === mcqs.correct_ans) {
              document.getElementById(selectedAnswer).classList.add('correct');
        }

        // Wrong selected option red
        if (
          selectedAnswer !== mcqs.correct_ans
        ) {
                document.getElementById(selectedAnswer).classList.add('incorrect');
                document.getElementById(mcqs.correct_ans).classList.add('correct');
        }
      });
    });

    
</script>
<style>
.correct {
    background-color: #d4edda !important;
    border-color: #28a745 !important;
    color: #155724 !important;
}
.incorrect {
    background-color: #f8d7da !important;
    border-color: #dc3545 !important;
    color: #721c24 !important;
}
</style>
@endsection
