<?php 
include('../config/config.php');

if(isset($_REQUEST['booking'])) {

	$name = $_REQUEST['name'];
	$numbe = $_REQUEST['numbe'];
	$email = $_REQUEST['email'];
    $sitting = $_REQUEST['sitting'];
	$dat = $_REQUEST['dat'];
	$tim = $_REQUEST['tim'];

	if(empty($name) && empty($numbe) && empty($email) && empty($sitting) && empty($dat) && empty($tim)) {
		header("location:".$siteurl."/book.php");
	}else {
		$sql  = "INSERT INTO booking ( name ,numbe ,email ,sitting ,dat ,tim) VALUES('$name', '$numbe', '$email','$sitting','$dat','$tim')";

		if(mysqli_query($conn, $sql)) {
			echo "Data Submitted Success";
		
		}else {
			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}	

}?>