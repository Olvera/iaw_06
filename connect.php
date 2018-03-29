<?php
//Do the conexion with 'iaw_06' database
function Connect()
{
if (!($link=mysqli_connect("localhost","root","")))
{
echo "Error connecting MySQL";
exit();
}
if (!mysqli_select_db($link,"iaw_06"))
{
echo "Error selecting data base.";
exit();
}
return $link;
}
?>
