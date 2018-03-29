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
	<a href="register.html"><b>Register</b></a>
	<a class="active" href="query.php"><b>Query</b></a>
	<a href="unsubs.html"><b>Unsubscribe</b></a>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<main>
	<div style="text-align: center">
	<!--A few lines to explain, shortly, what can be seen in this page-->
		&emsp;<h3>Computers Management</h3><br/>
		&emsp;Here you will see the register and computer's details in order to control stored material in a PC's shop.<br/><br/>
	</div>
	<div>
		<h3>Computer's stock list</h3>
		
<?php
include("connect.php");
$link=Connect();
$query="select Trademark,Model,Reference,Stock from computers order by Reference";
$resul=mysqli_query($link,$query);
$arr_resul= mysqli_fetch_array($resul);
// Cheks if there's no registers in the table
if (!$resul)
	echo ('<td height="30" align="center" colspan="10">Table have no registers</td>');
//Fills a graphical table whit the registers
else
{	
	echo "<table><tr><th>Trademark</th><th>Model</th><th>Reference</th><th>Repaired</th></tr>";
	while ($arr_resul==true) //While elements in array
	{?>
		<tr>	   
        	<td align="center"><?php  echo $arr_resul[0]; ?></td>
			<td align="center"><?php  echo $arr_resul[1]; ?></td>
			<td align="center"><?php  echo $arr_resul[2]; ?></td>
			<td align="center"><?php  if($arr_resul[3]) echo "YES";else{echo "NO";}; ?></td>
		</tr>
	  
	<?php $arr_resul= mysqli_fetch_array($resul); // Store next row in $arr_resul

	}
}

?>
	</table>
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
