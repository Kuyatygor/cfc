    <?php
if(isset($_POST["button_login"]))           //FUNGSI LOGIN
{ 

    $user   = $_POST["email"];
    $pass   = $_POST["password"];

    $sql_login      = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result_login   = $conn->query($sql_login);
    $row_login      = $result_login->fetch_assoc();
    $numrow_login   = $result_login->num_rows;

    if($numrow_login==1)
    {
        session_start();
        $_SESSION['users'] = $user;
        header('Location:index.php?');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CFC</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<header>

		<div class="nav-container">
			<div class="nav-wrapped">	
				<div class="logo-container">
					<a href="index.php"><img src="assets/img/logo.png" alt="">
					<ul class="nav-logo">
						<li>
							<a href="index.php"><h3>CFC Fiber Construction</h3>
						</li>
					</ul>
					
				</div>
				<div class="right-nav">
					<ul class="nav">
						<li><a href="">PROJECTS</a></li>
						<li><a href="">CREDENTIALS</a></li>
						<li><a href="">ABOUT US</a></li>
						<li><a href="">CONTACT US</a></li>
						<li class="sign-content"><a href="signup.php" style="color: #2980b9;
						border: 2px solid;
						border-radius: 4px;">SIGN UP</a></li>
					</ul>
					
				</div>
			</div>
		</div>
	</header>

<body>
	<div class="clear">
		
	</div>
	<div class="cfc-container">
	
			<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login Form</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="recsenha">
			    	    	<label>
			    	    		<a href="">Forgot password</a>
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="button_login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
		</div>
	</div>
</body>
</html>
