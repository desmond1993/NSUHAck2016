<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="spartanlogo.ico" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>


<title>New Event</title>
<style>
html{
	background: url(nsubackground.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover; 
  -o-background-size: cover;
  background-size: cover;
}
#loginsect{
width:500px;
height:100px;
margin:auto;
margin-top:200px;
}
.form-control{
  border-radius:50px;
}
.new_event{
  margin:auto;
  margin-top:100px;
}
body{
	background:transparent;
}
</style>
</head>

<body>
    <div class="container">
      <form class="new_event">
        <h2 class="new_event-heading" style="text-align:center">Add a New Event</h2>
        <label for="inputEventName" class="sr-only">Event Name</label>
        <input type="text" id="inputEventName" class="form-control" placeholder="Event Name" required autofocus>
       
        <label for="datepicker" class="sr-only">Date</label>
      <input type="text" id="datepicker" class="form-control" placeholder="Date" required>
        <label for="inputTime" class="sr-only">Time</label>
        <input type="time" id="inputTime" class="form-control" placeholder="00:00AM/PM" required>
        <label for="inputCost" class="sr-only">Cost $</label>
        <input type="cost" id="inputCost" class="form-control" placeholder="$">
        <label for="inputAddr" class="sr-only">Address</label>
        <input type="address" id="inputAddr" class="form-control" placeholder="Address" required>
       
  <textarea class="form-control" rows="2" id="comment" placeholder="Event Details"></textarea>
        <input type="text" id="sponsors" class="form-control" placeholder="Sponsors">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="no-charge" id="no-charge"> Free of charge.
            <form>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#no-charge").change(function() {
        if($(this).is(":checked")) {                
            $("#inputCost").attr("disabled", "disabled");
        }
        else {
            $("#inputCost").removeAttr("disabled");
        }
    });
});
</script>
          </label>
        </div>


        
        <div class="radio">
           <label class="radio-inline"><input type="radio" value="all" name="optradio">Available to All</label>
          <label class="radio-inline"><input type="radio" value="stu" name="optradio">Students Only</label>

        </div>
      
        <label>Upload Flyer</label>
        
        <input type="file" accept="image/*" onchange="picChange(event)"/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Create New Event</button>
      </form>

    </div> <!-- /container -->
</body>

</html> 