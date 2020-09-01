<!DOCTYPE html>
<html>
	<head>
		<title>Voting system </title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
<h2>Vote for your favourite party hello </h2>

<br>

<form action="vote1.php" method="post" align="center">
<img crossOrigin="anonymous" src="http://192.168.43.82/project/bjp.jpg" width="280" height="250"/>
<img crossOrigin="anonymous" src="http://192.168.43.82/project/cong.jpg" width="280" height="250"/>
<img crossOrigin="anonymous" src="http://192.168.43.82/project/jds.jfif" width="280" height="250"/>
<img crossOrigin="anonymous" src="http://192.168.43.82/project/jdu.png" width="280" height="250"/>
<br>

<input type="submit" name="BJP" value="vote for BJP"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Congress" value="vote for CONGRESS"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="JDS" value="vote for JDS"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="JDU" value="vote for  JDU"/>

</div>
</form>
<?php
$con=mysqli_connect("localhost","root","","mydatabase");
if(isset($_POST['BJP']))
{
	$vote_bjp="update voting_system set BJP=BJP+1";
	$run_bjp=mysqli_query($con,$vote_bjp);
	if($run_bjp)
	{
		sleep(3);
		echo "your vote has been recorded";
		header('Location:http://192.168.43.82/project/MAIN.html');

	}
}
if(isset($_POST['Congress']))
{
	$vote_congress="update voting_system set Congress=Congress+1";
	$run_congress=mysqli_query($con,$vote_congress);
	if($run_congress)
	{
		sleep(3);
		echo "your vote has been recorded";
		header('Location:http://192.168.43.82/project/MAIN.html');
	}
}
if(isset($_POST['JDS']))
{
	$vote_JDS="update voting_system set JDS=JDS+1";
	$run_JDS=mysqli_query($con,$vote_JDS);
	if($run_JDS)
	{
		sleep(3);
		echo "your vote has been recorded";
		header('Location:http://192.168.43.82/project/MAIN.html');

	}
}
if(isset($_POST['JDU']))
{
	$vote_JDU="update voting_system set JDU=JDU+1";
	$run_JDU=mysqli_query($con,$vote_JDU);
	if($run_JDU)
	{
		sleep(3);
		echo "your vote has been recorded";

		header('Location:http://192.168.43.82/projct/MAIN.html');
	}
}

?>









<center>
<a  href='MAIN.html'>Exit</a>
</center>
</body>

</html>

