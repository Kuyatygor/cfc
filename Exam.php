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
  <title>Online Assessment test : Exam</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">


<script>
	  //Print content
function printcontent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML =printcontent;

	window.print();
	document.body.innerHTML = restorepage;
}	

</script>

</head>
<?php include('Attribute/header.php') ?>
<body>
<h4 style="margin-left: 1em;">Examination</h4>

<div class="pane16 panel panel-info">
      <div class="panel-heading"> 

  <?php  if (isset($_SESSION['user'])) : ?>
       <label style="float: right;margin-top: -2.3em;margin-right: 5em;font-size: 20px;">User:</label>
        <p style="font-size: 18px;margin-right: 1.8em; float: right;margin-top: -2.4em;"><?php echo $_SESSION['user']['name']; ?></p>
       <?php endif ?>


      	  <label id="test_status" style=" margin-right: 5em;"> </label> 

		<label style="float:right; margin-right: 1em;">Timer: <span id='timerLabel' style="font-size: 17px; margin-right: 1em;">0</span></label>
      </div>
      <div class="panel-body">





 <script>
  var pos = 0, test, test_status, question, choices, chA, chB, chC, correct = 0;
  var questions = [
  		[ "What is 10 + 4", "12", "14", "16", "B", ],
  		[ "What is 20 - 9", "7", "13", "11", "C", ],
  		[ "What is 7 x 3", "21", "24", "25", "A", ],
  		[ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ],
      [ "What is 8 / 2", "10", "2", "4", "C", ]
  ];	
  function _(x){
  		return document.getElementById(x);
  }



  function renderQuestion(){
  		test = _("test");
  		if(pos >= questions.length){
        clearInterval(clock);
  			test.innerHTML = "<div id='div1'><h2>You got: "+correct+" out of "+questions.length+" Questions correct <br> Your time "+ timer +"  </h2> <br></div> ";
  			_("test_status").innerHTML = "Test Completed";
  			pos = 0;
  			correct = 0; 
  			return false;
  		}
  		_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
  		question = questions [pos] [0];
  		chA = questions [pos] [1];
  		chB = questions [pos] [2];
  		chC = questions [pos] [3];
  		test.innerHTML = "<h3>"+question+"</h3>";
  		test.innerHTML += "<input type='radio' name='choices' value='A'> " +chA+"<br>";
  		test.innerHTML += "<input type='radio' name='choices' value='B'> " +chB+"<br>";
  		test.innerHTML += "<input type='radio' name='choices' value='C'> " +chC+"<br><br>";
  		test.innerHTML +=  "<button type='button' class='btn btn-success' onclick='checkAnswer()'>Submit Answer</button>"; 


  }
  function checkAnswer(){
  		choices = document.getElementsByName ("choices");
  		for(var i=0; i<choices.length; i++){
  			if(choices[i].checked){
  				choice = choices[i].value;
  			}
  		}
  		if(choice == questions[pos][4]){
  			correct++;
  		}
  		pos++;
  		renderQuestion();
  }



  var clock;
  var timer = 0;
  function startTimer(){
    clock = setInterval(function () {
      timer++;
      console.dir(timer);
      document.getElementById('timerLabel').innerHTML = timer;
    },1000);
  }
startTimer();
  window.addEventListener("load", renderQuestion, false);
  function stoptTimer(){
    clock = setInterval(function () {
      timer--;
      console.dir(timer);
      document.getElementById('timerLabel').innerHTML = timer;
    },1000);
  }

  	stopTimer();
  window.addEventListener("load", renderQuestion, false);
  
  </script>
  </head>
  <body>
  <style>
  body{
  	background-image: url("images/school-2.jpg");
  	background-repeat: no-repeat;
  	background-size: 100%;
  }
  </style>
  <h2 id="test_status"></h2>
  <div id="test"></div>
  <style type="text/css">
  .timer{
    position: fixed;
    bottom: 20px;
    right: 20px;
    padding: 30px 100px;
    padding-bottom: 10px;
    height: 200px;
    background-color: #fff;
    border-radius: 50%;
  }
  #timerLabel{
    text-align: center;
    font-size: 100px;
    color: #000;
    margin: auto;
  }

  </style>


</div>
 </div>
 <div style="margin-left: 1em; margin-top: 1em;">

 	<button type="button" class="btnspeed btn btn-warning" onclick="startTimer(stop)">Time elapse</button>

  <a href="" class="btnreset btn btn-info" role="button">Reset</a>


  </div>
<div>
	<label>Your test result will be post before you answer all questions!</label>
</div>
<button class="btn btn-default" onclick = "printcontent('div1')">Print result</button>
</body>
</html>