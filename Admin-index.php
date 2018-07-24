<?php 
  include('functions.php');
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: Sign-in.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>OTWAE: Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='css/'>

</head>
<body>
<?php include('Attribute/admin-header.php') ?>


<a class="mobile">MENU</a>


<div id="container">

  <div class="sidebar">
    <ul id="nav">
      <li><a class="selected" href="#">Dashboard</a></li>
      <li><a href="#">Results</a></li>
      <li><a href="#">Accounts</a></li>
            <li><a href="#">Sign-out</a></li>
    </ul>
    
  </div>

  <div class="content">
    <h1>Dashboard</h1>
    <p>Website status</p>

    <div id="box">
     <div class="box-top">USER STATISTIC</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>

   <div id="box">
     <div class="box-top">ACTIVE USER</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>


    <div id="box">
     <div class="box-top">No. of Exam takes</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>


  </div>


</div><!-- #container -->

<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>

</body>
</html>