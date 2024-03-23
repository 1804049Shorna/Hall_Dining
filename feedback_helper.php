<?php 

if (isset($_POST['submit2'])) {
	include "connect_signup.php"; 

	echo "<pre>";
    print_r($_POST['id']);
	print_r($_POST['feedback']);
	echo "</pre>";

	
    $id=$_POST['id'];
    $feedback=$_POST['feedback'];


	
		// Insert into Database
		$sql = "INSERT INTO feedback_post(id, feedback)  
				        VALUES('$id', '$feedback')";
		mysqli_query($con, $sql);
		header("Location: view_feedback.php");
	

}else {
	header("Location: feedback2.php");
}
?>