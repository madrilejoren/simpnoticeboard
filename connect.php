<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'notice'; 
$con = mysqli_connect("localhost","root","","notice") or die('Unable to establish a DB connection');


if(!con)
{

	echo 'not connected to server';

}

if(!mysqli_select_db($con,'notice'))
{

	echo 'Database not connected';

}

$Position = $_Post['position'];
$Message = $_Post['meesage'];

$sql = "INSERT INTO noticemsg (position,message) Values ('$Name','$Message')";

if(!mysqli_query($con,$sql))
{

	echo"not inserted"
}

else 
{
echo"inserted"

}

header ("refresh:2; url=noticeboard.html");




/*mysqli_query($con,"SELECT * FROM noticemsg");
mysqli_query($con,"INSERT INTO noticemsg (id,position,message)
VALUES (15,'Student', 'Exam mo bwas')");
mysqli_query($con,"INSERT INTO noticemsg (id,position,message)
VALUES (16,'Teacher', 'Utang mo')");

mysqli_query($con,"INSERT INTO noticemsg (id,position,message)
VALUES (17,'Staff', 'Cr to higko)");


mysqli_close($con);*/
?>