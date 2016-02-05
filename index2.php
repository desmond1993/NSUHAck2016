<html>
<head>
<?php
session_start();
$_SESSION['sessionEmail'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<title>Spartan Connect</title>
<style>
.form-control{
	border-radius:50px;
}
.form-signin{
	margin:auto;
	margin-top:26.25em;
  width:auto;
  height:auto;
}
.dropdown{
	margin:auto;
  width:auto;
  height:auto;
}
.container{
}
html { 
  background: url(../images/homeback.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover; 
  -o-background-size: cover;
  background-size: cover;
     }
body{
  background:transparent;
}
</style>
</head>

<body>


    <div class="container">
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select Your School
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="index.php">Norfolk State University</a></li>
    <li><a href="#">Old Dominion University</a></li>
    <li><a href="#">Hampton University</a></li>
    <li><a href="#">College of William and Mary</a></li>
  </ul>
</div>
      <form class="form-signin" action="id.php">
        <h2 class="form-signin-heading"></h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" style="width:25%;" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" style="width:25%;" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" ontype="submit" style="width:25%;">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>