<?php 

session_start();
error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="assets/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/AdminLTE.min.css">

</head>
<body>
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
	 <li class="dropdown notifications-menu">
		 <a href="https://t.me/nafmkd" target="_blank"> @NafMKD </a>
	 </li>
      </ul>
    </div>
  </nav>
</header>

<section>
	<div class="container" style="margin-top: 85px;">
    <div class="row">
      <div class="col-md-8">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="myform">
            <div class="box box-primary" id="sowbox">
              <div class="box-header with-border">
                <h3 class="box-title">Your GPA will be shown here</h3>
              </div>

              <div class="box-body">
                
              </div>
            </div>

            <div id="sowbox1">
            </div>
        </form>
      </div>

      <div class="col-md-4">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Quick GPA Calculator</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
          </div>

          <div class="box-body">
            <span>Insert Your Grade Here</span>
            <div class="row" style="margin-top: 20px;">
            	<div class="col-md-4"></div>
            	<div class="col-md-4">
            		<input type="text" maxlength="2" class="form-control" id="maths" placeholder="Maths" style="margin-top: 5px;">
            		<input type="text" maxlength="2" class="form-control" id="chem" placeholder="T.D" style="margin-top: 5px;">
            		<input type="text" maxlength="2" class="form-control" id="phy" placeholder="Physics" style="margin-top: 5px;">
            		<input type="text" maxlength="2" class="form-control" id="eng" placeholder="English" style="margin-top: 5px;">
            		<input type="text" maxlength="2" class="form-control" id="civ" placeholder="Logic" style="margin-top: 5px;">
            		<input type="text" maxlength="2" class="form-control" id="cse" placeholder="CSE" style="margin-top: 5px;">
            	</div>
            	<div class="col-md-4"></div>
            </div>     
            <span class="input-group-btn">
              <button class="btn btn-info pull-right" id="calculate" type="button" style="margin-top: 10px;">Calculate</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


	<script src="assets/jquery.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>
	<script>
    	$(document).ready(function(){
      		$("#calculate").click(function(){
		document.getElementById("calculate").innerHTML = "Calculating ..";
       		 $.post("calc.php",
         		 {

              maths:  document.getElementById('maths').value,
              chem: document.getElementById('chem').value,
              phy: document.getElementById('phy').value,
              eng: document.getElementById('eng').value,
              civ: document.getElementById('civ').value,
              cse: document.getElementById('cse').value
              
          },
          function(data){
	       $('#sowbox').removeClass("box box-primary");
               $('#sowbox').html(data);
	       document.getElementById("calculate").innerHTML = "Calculate";
          });
      });
    })
  </script>
</body>
</html>
