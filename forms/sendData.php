<?php	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$uname=$_POST['name'];
	$bname = $_POST['branchName'];
	$cyear = $_POST['currentYear'];
	$subject=$_POST['subject'];
	$email=$_POST['email'];
	$reason=$_POST['reason'];

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="gandharwa"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	$sql = "INSERT 
			INTO
			   register
			   ( name, branchName, currrentYear,email, subject, reason) 
			VALUES
			   ('$uname', '$bname', '$cyear','$email', '$subject', '$reason')";

	if (mysqli_query($conn,$sql)) {
	  echo "Successfully Registered";
	}else{
	echo "Error in submission";
	}		
}

?>
 