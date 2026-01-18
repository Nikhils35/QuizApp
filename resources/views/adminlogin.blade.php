<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite('resources/css/app.css')
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     

</head>

<body class=" bg-gray-400 flex items-center justify-center min-h-screen" style="background-color:#918e8e;">
    <div class="main bg-white p-8 p-4 rounded-2xl shadow-2xl max-w-sm">
        <h2 class='text-2xl text-center text-gray-800 mb-4'>Admin Login</h2>
        @error('user')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <!-- <strong>Holy guacamole!</strong> -->
             {{$message}} 

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        <form action="/admin" method='post' class="space-y-4">
            @csrf
            <div>
                <label for="admin-name ">Admin name</label>
                <input type="text" name='name' id="admin-name" placeholder="Enter admin name"
                    class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none">
                @error('name')
                <div class=" text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name='password' id="password" placeholder="Enter password"
                    class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none">
                @error('password')
                <div class=" text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <input type="submit" name='admin-login' value="Login"
                    class="w-full text-center bg-green-500 py-2 rounded-lg text-white font-semibold hover:bg-green-600 cursor-pointer">
            </div>
        </form>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>