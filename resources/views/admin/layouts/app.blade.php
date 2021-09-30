<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="/favicon.png">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand mx-auto psguy-logo" href="{{ url('/') }}">
            Colour Professionals
        </a>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar pt-5">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/dashboard">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/quotation">
                    <span data-feather="file"></span>
                    Make Quotation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/documents">
                    <span data-feather="shopping-cart"></span>
                    Manage Documents
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/paint-calculator">
                    <span data-feather="users"></span>
                    Paint Calculator
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/signout">
                    <span data-feather="users"></span>
                    Sign out
                    </a>
                </li>
                </ul>


            </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('title')</h1>
            </div>
            @yield('content')
            </main>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script> --}}
  </body>
</html>
