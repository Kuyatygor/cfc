<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Online Assessment test : Sign in</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php include('Attribute/header.php') ?>
</ul>
<!--Sign up start here!-->
<div class="container container2">
   <?php echo display_error(); ?>
  <h2>Sign in</h2>
  <form method="post" class="form-horizontal" role="form" action="Sign-in.php" >
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="mybtn btn btn-default" name="login_btn">Login</button>
      </div>
    </div>
  </form>
</div>
<!--End here-->
<?php require("Attribute/footer.php"); ?>
</body>     
</html>