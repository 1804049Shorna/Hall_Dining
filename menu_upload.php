<?php 

if (isset($_POST['submit2'])) {
	include "connect_signup.php"; 

	echo "<pre>";
    print_r($_POST['idd']);
	print_r($_POST['menu']);
	echo "</pre>";

	
    $id=$_POST['idd'];
    $menu=$_POST['menu'];


	
		// Insert into Database
		$sql = "INSERT INTO images2(studentId, menu)  
				        VALUES('$id', '$menu')";
		mysqli_query($con, $sql);
		header("Location: menu_view.php");
	

}else {
	header("Location: index.php");
}
?>