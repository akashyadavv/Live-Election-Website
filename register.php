<?php
$firstname=filter_input (INPUT_POST, 'text1');
$middlename=filter_input (INPUT_POST, 'text2');
$lastname=filter_input (INPUT_POST, 'text3');
$dob=filter_input (INPUT_POST, 'date1');
$gender=filter_input (INPUT_POST, 'gender');
$mobilenumber=filter_input (INPUT_POST, 'numb');
$username=filter_input (INPUT_POST, 'mail');
$newpassword=filter_input (INPUT_POST, 'newp');
$confirmpassword=filter_input (INPUT_POST, 'confp');
$address=filter_input (INPUT_POST, 'address');
$mysqli=new mysqli("localhost","root","","mydatabase");

if($mysqli->connect_errno)
{
	echo "Failed:(".
	$mysqli->connect_errno.")".$mysqli->connection_error;
}
else
{
	$sql = "INSERT INTO registered_accounts (FirstName, MiddleName,LastName,DOB,GENDER,MOBILENUM,EMAIL,PASSWORD,CONFIRMPASSWORD,ADDRESSS) values ('$firstname','$middlename','$lastname','$dob','$gender','$mobilenumber','$username','$newpassword','$confirmpassword','$address')";
	if ($mysqli->query($sql)){
		echo "New record is inserted sucessfully";
	}
	else{
		echo "Error: ". $sql ."
		". $mysqli->error;
	}
	$mysqli->close();
}
?>
