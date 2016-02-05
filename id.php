<html>
<head>
<?php
session_start();
?>
<style type="text/css">
  .top-buffer{
  margin-top:20px;
}

.rcorners1 {
    border-radius: 25px;
    background-image: url("assets/id.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 260% 250%;
    width: 300px;
    height: 400px;
    margin: auto;
    font-weight: 700;
}

.picPadding{
  padding: 10px;

}


</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" type="text/css" href="../css/id.css"> -->
</head>
<body>
<div class="rcorners1">


	<div class="row">
  <div class="col-sm-12">

    <div class="row">
    <div class="col-xs-1 col-sm-1"></div>
      <div class="col-xs-6 col-sm-6 picPadding">

        <img src="../images/defult.jpg" alt="..." class="img-thumbnail ">
      </div>
      <div class="col-xs-5 col-sm-5">

      </div>
    </div>
        <div class="row">
      <div class="col-xs-6 col-sm-6">

      </div>
      <div class="col-xs-6 col-sm-6">
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="" />
      </div>
    </div>
        <div class="row top-buffer">
      <div class=" text-center">
      <?php
       echo  'Danielle Butts';
       ?>
      </div>
    </div>
            <div class="row">
      <div class="text-center ">
             <?php
       echo  '0373787';
       ?>

      </div>
    </div>
  </div>
</div>
</div>
</body>
