<!Doctype HTML>
<html>
<head>
	<title>CustomerSurvey</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.min.css')}}">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/style.css')}}">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body>
<div class="container">
@include('success')

<form id="surForm" action="{{ url('saveData')}}">
<h1>RATE US:</h1>

<!-- One "tab" for each step in the form: -->
<!-- STEP ONE -->
<div class="tab"><h4>Contact Info:</h4>
  <p>Name<input oninput="this.className = ''" name="Name"></p>
  <p>Email<input oninput="this.className = ''" name="email"></p>
  <p>Organization<input oninput="this.className = ''" name="Organization"></p>
</div>

<!-- STEP TWO -->
<div class="tab"><h4>Service Delivery:</h4>
    <p>Ticketing</p>
    <select class="form-control" name="Ticketing">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>
    <p>Transport</p>
    <select class="form-control" name="Transport">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>
    <p>Destinations/Hotel Bookings</p>
    <select class="form-control" name="Destinations/HotelBookings">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>
    <p>Visa desk</p>
    <select class="form-control" name="VisaDesk">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select>
</div></br>

<!-- STEP THREE -->
<div class="tab"><p>Turn-around time:</p>
    <select class="form-control" name="Turn-aroundTime">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>

    <p>Out of the box solutions</p>
    <select class="form-control" name="OutOfTheBoxSolutions">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select>
</div>  

<!-- STEP FOUR -->
<div class="tab"><p>Rate the 24hr desk:</p>
    <select class="form-control" name="RateThe24hrDesk">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>

    <p>Relationship with the account manager</p>
     <select class="form-control" name="RelationshipWithAccountManager">
        <option>--Select--</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Satisfactory</option>
        <option>Fair</option>
        <option>Not Good</option>
    </select></br>
    <div class="form-group">
	    <label for="suggestions">Suggestions</label>
	    <textarea class="form-control" rows="5" id="suggestion"></textarea>
	</div>
</div></br>

<div style="overflow:auto;">
  <div style="float:right;">
    <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
  @yield('content')
</div>

</body>
</html>

<script type="text/javascript">
	var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>