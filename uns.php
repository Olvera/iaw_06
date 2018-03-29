<!DOCTYPE html>
<html lang="en">

<head>
	<title>Computers Management</title>
	<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
	<meta name="description" content="IAW 6 Task - 2º ASIR">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' media='screen and (min-width: 961px)' href='css/d.css'>
	<link rel='stylesheet' media='screen and (max-width: 960px)' href='css/m.css'>
	<script src="js/city_gym.js"></script>
</head>

<body>
	
	<!--Main menu-->
<div class="topnav" id="myTopnav">
	<a class="active" href="register.html"><b>Register</b></a>
	<a href="query.php"><b>Query</b></a>
	<a href="unsubs.html"><b>Unsubscribe</b></a>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<main>
	<div style="text-align: center">
	<!--A few lines to explain, shortly, what can be done in this page-->
		&emsp;<h3>Computers Management</h3><br/>
		&emsp;From this page you will be able to unsubscribe a computer stored in a PC's shop data base.<br/><br/>
	</div>
	<div><!--Form to unsubscribe a especific computer, after checking if it exists-->
		<h3>Computer's unsubscribe form</h3>
<?php 

include("connect.php");
$link=Connect();
$ref=$_POST['ref'];
$del="delete from computers where Reference=$ref";
$comp=mysqli_query($link,"select Reference from computers where Reference=$ref");
//Checks that a reference number have been entered
if (!$ref) {
	echo "<h3>Field must be filled whith a valid Ref. number</h3><a href='unsubs.html'><input type='button' id='button' value='Go back'></a><br/>";
}
//Checks that entered Reference number exists in the database
elseif (mysqli_num_rows($comp)==0) {
	echo "<h3>This Reference number do not exists</h3><a href='unsubs.html'><input type='button' id='button' value='Go back'></a><br/>";
}
//If exists, it deletes it
else{
	mysqli_query($link,$del);
	header('Location: query.php');
}

?>
	</div>
</main>

<br/><br/><br/><br/><br/>
<!--Authoring, date an contact-->
<footer>
	<address>
		<p>Created by: Fco. Javier Olvera Martínez - <small>March 2018</small></p>
		<p>2º ASIX - IAW - UT 6</p>
		<a href="mailto:f.j.olvera@gmail.com">Contact email</a>
	</address>
</footer>
<!--CSS validation-->
<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="¡CSS Válido!" />
    </a>
</p>

</body>
</html>
