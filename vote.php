<!DOCTYPE html>
<html>
	<head>
		<title>Voiting system </title>

</head>
<body>
<div style="background:black; color: white; text-align: center; width: 100% padding: 7px; font-family: comic sans ms;"><h2>Vot for your fav party </h2></div>
<form action="vote.php" method="post" align="center">
<img src="" width="280" height="250"/>

<input type="submit" name="BJP" value="vote for BJP"/>
<input type="submit" name="CONGRESS" value="vote for CONGRESS"/>
<input type="submit" name="JD(S)" value="vote for JD(S)"/>
<input type="submit" name="JDU" value="vote for  JDU"/>
<input type="submit" name="AAP" value="vote for AAP"/>

</form>
</body

</html>
//create a connection to the datbase, add vote table
$con = mysqli_connect("localhost","root","","mydatabase");
if (isset($_POST['BJP']))
{
	$vote_m = "update voting_system set BJP=BJP+1";
	$run_m = mysqli_query($con, $vote_m);

	if ($run_m){
		echo "<h2 align='center'> Your vote has been registered</h2>";
		echo "<h2 align='center'><a href='index.php?results'> View Results</a></h2>";	
	}
}
if (isset($_POST['CONGRESS']))
{
        $vote_m = "update voting_system set Congress=Congress+1";
        $run_m = mysqli_query($con, $vote_m);

        if ($run_m){
                echo "<h2 align='center'> Your vote has been registered</h2>";
                echo "<h2 align='center'><a href='index.php?results'> View Results</a></h2>";   
        }
}
if (isset($_POST['JDS']))
{
        $vote_m = "update voting_system set JDS=JDS+1";
        $run_m = mysqli_query($con, $vote_m);

        if ($run_m){
                echo "<h2 align='center'> Your vote has been registered</h2>";
                echo "<h2 align='center'><a href='index.php?results'> View Results</a></h2>";   
        }
}
if (isset($_POST['JDU']))
{
        $vote_m = "update votes set JDU=JDU+1";
        $run_m = mysqli_query($con, $vote_m);

        if ($run_m){
                echo "<h2 align='center'> Your vote has been registered</h2>";
                echo "<h2 align='center'><a href='index.php?results'> View Results</a></h2>";   
        }
}
if (isset($_POST['AAP']))
{
        $vote_m = "update votes set AAP=AAP+1";
        $run_m = mysqli_query($con, $vote_m);

        if ($run_m){
                echo "<h2 align='center'> Your vote has been registered</h2>";
                echo "<h2 align='center'><a href='index.php?results'> View Results</a></h2>";   
        }
}


if (isset($_GET['results']))
{
	$get_votes = "select * from votes";
	$run_votes = mysqli_query($con, $get_votes);
	$row_votes = mysqli_fetch_arrray($run_votes);
	$m = $row_votes['m'];
	$k = $row_votes['k'];
	$a = $row_votes['a'];
	$count = $m+$k+$a;
	$per_m= round($m*100/$count)."%";
	$per_k= round($k*100/$count)."%";
	$per_a= round($a*100/$count)."%";
	echo"
	<div style='background: orange' padding:10px; text-align: center	
	<center>
	<h2>Updated REsu:</h2>
	<p style='background: black; color:white;pading:10px;width:500px;'>	
	<b>M:<b>$m ($per_m)
	</p> 

	</div>
	"
}
?>
</body>
</html>
