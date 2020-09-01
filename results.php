<html>
<?php

$con = mysqli_connect("localhost","root","","mydatabase");


if (isset($_GET['results']))
{
	
	$get_votes = "SELECT * FROM voting_system";

	$run_votes = mysqli_query($con, $get_votes);

	$row=mysqli_fetch_array($run_votes,MYSQLI_NUM);
	$a=$row[0];
	$b=$row[1];
	$c=$row[2];
	$d=$row[3];
	$count = $a + $b + $c + $d;
	$per_a = round($a*100/$count) . "%";
	$per_b = round($b*100/$count) . "%";
	$per_c = round($c*100/$count) . "%";
	$per_d = round($d*100/$count) . "%";

	echo "
	<div style='background: orange'  padding: 10px; text-align: center;>
	<center>
		<h2> Voting Results:</h2>
	<p style ='background: black; color: white; padding:10px;width:500px'>
		<b> BJP: </b> $a ($per_a)
	</p>
	<p style ='background: black; color: white; padding:10px;width:500px'>
		<b> Congress: </b> $b ($per_b)
	</p>
	<p style ='background: black; color: white; padding:10px;width:500px'>
		<b> JDU: </b> $c ($per_c)
	</p>
	<p style ='background: black; color: white; padding:10px;width:500px'>
		<b> JDS: </b> $d($per_d)
	</p>
	</center>
	</div>
	";
}
 

 
	
?>
<center>
<a   href='MAIN.html'> click here to log-out </a>
</center>
</html>
