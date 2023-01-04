<!DOCT
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>Peminjaman Laptop</title>
</head>
<body style="background-color: #E0ECFE">

    {{-- <div class="d-flex justify-content-center bg-primary p-3">
        <a class="navbar-brand text-white" href="{{route('index')}}"><i class="fa-sharp fa-solid fa-laptop"></i> PEMINJAMAN LAPTOP</a>
    </div> --}}
 {{-- content tambahan di berbagai halaman --}}
    
@if (Auth::check())
<nav class="navbar navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><i class="fas fa-list-ul"></i> Peminjaman Laptop</a>
      <a href="/logout" class="btn btn-outline-light" ><i class="fas fa-sign-out-alt"></i> {{Auth::user()->name}} Logout</a>
  </div>
</nav>
 
@endif
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        $('body').on('click', '#detailData', function (event) {
          event.preventDefault();
          var id = $(this).data('id');
          $.get('/detail/' + id, function (data) {
            var detail = 
            `<ul>
              <li>Nama: ${data.data.name}</li>
              <li>NIS: ${data.data.nis}</li>
            </ul>`;
            $('#look').html(detail);
          })
        })
      })
    </script>
</body>
</html>
