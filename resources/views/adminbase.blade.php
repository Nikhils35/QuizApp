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
    
/* Firefox */
* {
    scrollbar-width: thin;
    scrollbar-color: #6c757d #f1f1f1;
}

/* Chrome, Edge, Safari */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background-color: #6c757d;
    border-radius: 10px;
}

    /* Sidebar */
    .admin-sidebar{
      width:240px;
      background:#1e293b;
      color:#fff;
      padding:20px;
    }
    .admin-sidebar h2{margin-bottom:30px;text-align:center}
    .admin-sidebar a{
      display:block;
      color:#cbd5e1;
      text-decoration:none;
      padding:12px;
      border-radius:8px;
      margin-bottom:10px;
    }
    .admin-sidebar a:hover{background:#334155;color:#fff}

    /* Main */
    .admin-main{flex:1;padding:20px}

    /* Header */
    .admin-header{
      background:#fff;
      padding:15px 20px;
      border-radius:10px;
      margin-bottom:20px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      box-shadow:0 4px 10px rgba(0,0,0,0.05)
    }
    .admin-header h2{font-size:24px;color:#111827;font-weight:bold}

    /* Cards */
    .admin-cards{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:20px;
      margin-bottom:25px;
    }
    .admin-card{
      background:#fff;
      padding:20px;
      border-radius:12px;
      box-shadow:0 4px 10px rgba(0,0,0,0.05)
    }
    .admin-card h3{color:#475569;font-size:16px}
    .admin-card p{font-size:28px;font-weight:bold;margin-top:10px}

    /* Table */
    .admin-table-box{
      background:#fff;
      padding:20px;
      border-radius:12px;
      box-shadow:0 4px 10px rgba(0,0,0,0.05)
    }
    .admin-table{width:100%;border-collapse:collapse}
    .admin-table th,.admin-table td{padding:12px;border-bottom:1px solid #e5e7eb;text-align:left}
    .admin-table th{background:#f1f5f9}
    .admin-table tr:hover{background:#f9fafb}

    /* Responsive */
    @media(max-width:768px){
      /* .admin-sidebar{display:none} */
    }

/* -------------------------------userapp/css------------------------------- */
        
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
