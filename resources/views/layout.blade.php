<!Doctype HTML>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/Design.css')}}">  
  <script src="{{ asset ('/js/bootstrap.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body>

  <div class="wrapper">
    <div class="sidenav">
       <nav id="sidebar">
        <ul class="list-unstyled components">
          <li class="nav-item">
            <a class="navbar-brand" href="{{url ('#')}}">
              <img src="{{ asset ('cs3.png')}}" style="border-radius: 60%; width: 150px; height: 150px;">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url ('/Dashboard')}}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url ('/Survey Reports')}}" >Survey Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url ('/Function Excel')}}">Function Excel</a>
          </li>
        </ul>
    </nav>
    </div>
   </div>

  <div class="main-content">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Survey Reports</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Survey reports</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Function Excel</div>
            <div class="card-body">
                <h5 class="card-title">Tertiary card title</h5>
            </div>
          </div>
        </div>
    </div> 
  </div>
  @yield('content')
  </div>
</body>
</html>
<script type="text/javascript">
  // Get the container element
var navContainer = document.getElementById("sidebar");

// Get all buttons with class="btn" inside the container
var nav = navContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < nav.length; i++) {
  nav[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}
</script>