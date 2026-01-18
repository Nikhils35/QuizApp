<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial, Helvetica, sans-serif}
    .admin-body{background:#f4f6f9;display:flex;min-height:100vh}
    </style>
</head>

<body class="admin-body">
   


    <div class="admin-sidebar">
        <h2>Admin Panel</h2>
        <a href="/admindash">Dashboard</a>
        @if(session('admin.role')=='Owner')
        <a href="/users">Users</a>
        @endif
        <a href="/catagories">Catagories</a>
        <a href="/quiz"> Add Quiz</a>
        <a href="/quizlist">Quiz List</a>
        <a href="/logout">Logout</a>
    </div>

    <div class="admin-main">
        <div class="admin-header">
            <h2> @yield('header')</h2>
            <div>
                <span style="color: blueviolet; font-weight: 500;">Welcome 
                    {{ ucfirst(session('admin.name')) }}</span>
                    <br>
                <span>Email : {{ session('admin.email') }}</span>
            </div>
        </div>
    <div class="admin-content ">
        @yield('content')
    </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
    setTimeout(() => {
        document.querySelectorAll('.alert')
            .forEach(alert => alert.remove());
    }, 3000);
 </script> 

</body>

</html>
