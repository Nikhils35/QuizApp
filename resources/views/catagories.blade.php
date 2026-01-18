@extends('adminbase')

@section('title', 'Catagories')

@section('content')
@section('header', 'Catagories')

<div class="d-flex flex-row gap-5">
<div class="card admin-card" style="width: 70%; max-height:500px;">
  <!-- <h3>All Catagories</h3> -->
  <h3 class="card-title mb-2" style="color:#605b5b; font-weight:bold;">All Catagories</h3>
  @if(session()->has('deletesuccess'))  
  <div class="w-full text-left text-green-500 " style="font-size:14px;">
    {{ session('deletesuccess') }}</div>
    @endif
    <div class="card-body " style="overflow-y:auto;">
        <table class="admin-table card-text ">
          <thead>
            <tr>
              <th>SN.</th>
              <th>Catagories</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $sn=1; ?>
          @foreach($catagory as $cat)
          <tr>
            <td>{{ $sn }}</td><?php $sn++; ?>
            <td>{{ ucfirst($cat->catagory) }}</td>
            <td>{{ $cat->userid }}</td>
            <td>
              <a href="/deletecatagory/{{ $cat->id }}" onclick="return confirm('Are you sure you want to delete this Catagory?')" class="btn" style="color:red;"><i class="fa-solid fa-trash-can"></i></a>
            </td>
            
          </tr>
          @endforeach
          </tbody>
        </table>
 
    
  </div>
</div>

<div class="card" style="width: 18rem; height:230px;">
  <!-- <h3>Add Catagory</h3> -->
  <div class="card-body text-center">
    <h3 class="card-title " style="color:#605b5b; font-weight:bold;">Add Catagory</h3>
    <p class="card-text">
        <form action="/addcatagory" method="post">
            @csrf
            @if(session()->has('addsuccess'))  
        <div class="w-full text-left text-green-500 " style="font-size:14px;">{{ session('addsuccess') }}</div>
            @endif
            @error('catagory')
                <div class="w-full text-left text-red-500 " style="font-size:14px;">{{$message}}</div>
            @enderror
            <input type="text" class='w-full px-2 py-2 border border-gray-300 rounded-lg focus:outline-none my-2' name="catagory" placeholder="Enter catagory name">
             <button class="btn btn-success my-3 w-full">Add</button>
        </form>
    </p>
  </div>
</div>
</div>

@endsection