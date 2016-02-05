<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="spartanlogo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<title>Account Balance</title>
<style>
html{
background: url(nsubackground.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover; 
  -o-background-size: cover;
  background-size: cover;
  margin-top:5%;
}
.table>tbody>tr.info>td{
  background-color:#F3DE00;
  border-color:black;
  color:#333;
}
.table>tbody>tr.info2>td{
  background-color:#13CC00;
  border-color:black;
  color:#333;
}
.header{
	text-align:center;
	font-size:2em;
  border-color:black;
  background-color:green;

}
.panelpanel-primary{
	color:#1AB212;
  background:transparent;
  border-color:black;
}
.panel-primary>.panel-heading{
  background-color:green;
  bakcground-image: linear-gradient(to bottom,#23CB00 0,#23CB12 100%);
}
.bal{
	font-size:1.8em;
	text-align:center;
}
.balhead{
	margin:auto;
	text-align:center;
}
.info{
  background-color:#04B404;
}
.balcent{
	margin-top:-10px;
	text-align:center;
    border-radius: 15px;
    width:  2px;
    height: 2px; 
}
.col-lg-12{
  background:transparent;
}
.container{
  background:transparent;
}
body{
  background:transparent;
}
.panel-heading{
  background-color:green;
}
.panel-body{
  background-color:#CCC;
}
</style>
</head>

<body>
<div class="container">
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="header">Spartan Card Activity</h3>

    </div>
    <div class="panel-body">
      
      <table align="center" class="balcent" >
      	<div align="center">
      		<thead align="center" class="balhead">
      		<tr align="center">
      			<th class="bal">Balance</th>
      		</tr>
      		</thead>
      		<tbody>
      			<td class="bal" align="center">$213.63</td>
      		</tbody>
      </table>
      	</div>
      	<table class="table table-condensed">
        <thead>
          <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Points</th>
          </tr>
        </thead>
        <tbody>
          <tr class="info">
          	<td class="info">02/04/2016</td>
          	<td>Chipotle</td>
          	<td>$-5.00</td>
            <td>.25</td>
          </tr>
          <tr class="info2">
          	<td>02/04/2016</td>
          	<td>Dominion Enterprises Parking</td>
          	<td>$-23.00</td>
            <td>1.15</td>
           </tr>
          <tr class="info">
          	<td>01/29/2016</td>
          	<td>Deposit</td>
          	<td>$82.00</td>
            <td>0</td>
          </tr>
          <tr class="info2">
          	<td>01/27/2016</td>
          	<td>Spartan Market</td>
          	<td>$-13.00</td>
            <td>.65</td>
           </tr>
           <tr class="info">
          	<td>01/26/2016</td>
          	<td>Golden City</td>
          	<td>$-12.00</td>
            <td>.6</td>
          </tr>
          <tr class="info2">
          	<td>01/24/2016</td>
          	<td>Buffalo Wild Wings</td>
          	<td>$-23.00</td>
            <td>1.15</td>
            
           </tr>
           <tr class="info">
          	<td>01/23/2016</td>
          	<td>CVS Pharmacy</td>
          	<td>$-8.23</td>
            <td>.41</td>
          </tr>
          <tr class="info2">
          	<td>01/23/2016</td>
          	<td>Martin's Soul Food</td>
          	<td>$-16.52</td>
            <td>.82</td>
           </tr>
           <tr class="info">
          	<td>01/22/2016</td>
          	<td>Deposit</td>
          	<td>$62.00</td>
            <td>0</td>
          </tr>
          <tr class="info2">
          	<td>01/21/2016</td>
          	<td>Park Avenue Market</td>
          	<td>$-9.30</td>
            <td>.46</td>
           </tr>
           <tr class="info">
          	<td>01/19/2016</td>
          	<td>Domino's</td>
          	<td>$-26.00</td>
            <td>1.3</td>
          </tr>
          <tr class="info2">
          	<td>01/18/2016</td>
          	<td>Chanello's</td>
          	<td>$-13.00</td>
            <td>.65</td>
           </tr>
           <tr class="info">
          	<td>01/17/2016</td>
          	<td>MP Island Cafe</td>
          	<td>$-14.32</td>
            <td>.71</td>
          </tr>
          <tr class="info2">
          	<td>01/15/2016</td>
          	<td>Deposit</td>
          	<td>$233.00</td>
            <td>0</td>
           </tr>
                </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</body>

</html>