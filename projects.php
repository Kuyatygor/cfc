<!DOCTYPE html>
<html>
<head>
	<title>CFC Fiber Construction</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

 <style type="text/css">
.container {
    margin-top: 20px;
}

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
}

.carousel-control.left span {
    padding: 15px;
}

.carousel-control.right span {
    padding: 15px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
    left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
    right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
    background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b900;
    padding: 10px;
}

.header-text h3 span {
    background-color: #2980b900;
    padding: 15px;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #000;
    background-color: #fff;
    border-color: #fff;
}

.row {
    margin-left: -70px;
    margin-right: -68px;
}

.carousel {
    position: inherit;
}
.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    margin-left: -30%;
    padding-left: 0;
    list-style: none;
    text-align: center;
    </style>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>





<!-- <style type="text/css">
.container {
    margin-top: 20px;
}

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
}

.carousel-control.left span {
    padding: 15px;
}

.carousel-control.right span {
    padding: 15px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
    left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
    right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
    background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b900;
    padding: 10px;
}

.header-text h3 span {
    background-color: #2980b900;
    padding: 15px;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #000;
    background-color: #fff;
    border-color: #fff;
}

.row {
    margin-left: -70px;
    margin-right: -68px;
}

.carousel {
    position: inherit;
}
.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    margin-left: -30%;
    padding-left: 0;
    list-style: none;
    text-align: center;
    </style>


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script> -->

<body>
<header>

		<div class="nav-container">
			<div class="nav-wrapped">	
				<div class="logo-container">
					<img src="assets/img/logo.png" alt="">
					<ul class="nav-logo">
						<li>
							<h3><a href="index.php">CFC Fiber Construction</h3>
						</li>
					</ul>
					
				</div>
				<div class="right-nav">
					<ul class="nav">
						<li><a href="projects.php">PROJECTS</a></li>
						<li><a href="credentials.php">CREDENTIALS</a></li>
						<li><a href="" >ABOUT US</a></li>
						<li><a href="">CONTACT US</a></li>
						<li class="sign-content"><a href="login.php" style="color: #2980b9;
						border: 2px solid;
						border-radius: 3px;">Login</a></li>
					</ul>
					
				</div>
			</div>
		</div>
	</header>
	<div class="container">
	<div class="row">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="assets/img/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <!-- <h2>
                            	<span>Welcome to <strong>CFC Fiber Construction Corporation</strong></span>
                            </h2> -->
                            <br>
                            <!-- <h3>
                            	<span><strong>Quality service with Excelent result</strong></span>
                            </h3> -->
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Learn more</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="assets/img/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <!-- h2>
                                <span>Welcome to <strong>CFC Fiber Construction Corporation</strong></span>
                            </h2> -->
                            <br>
                            <!-- <h3>
                            	<span><strong>Quality service with Excelent result</strong></span>
                            </h3> -->
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Learn more</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="assets/img/3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <!-- <h2>
                                <span>Welcome to <strong>CFC Fiber Construction Corporation</strong></span>
                            </h2> -->
                            <br>
                            <!-- <h3>
                            	<span><strong>Quality service with Excelent result</strong></span>
                            </h3> -->
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Learn more</a></div>
                        </div>

                    </div><!-- /header-text -->

			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>
</div>
<br>



			





<script type="text/javascript">
	
	</script>

	<script type="text/javascript">
	
	</script>

			</body>
			</html>