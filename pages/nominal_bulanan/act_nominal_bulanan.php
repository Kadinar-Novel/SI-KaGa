<?php
	session_start();
	include "../../lib/conn.php";
	
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	if(isset($_GET['page']) && isset($_GET['act']))
	{
		$mod = $_GET['page'];
		$act = $_GET['act'];
	}
	else
	{
		$mod = "";
		$act = "";
	}

	if($mod == "nominal_bulanan" AND $act == "simpan")
	{
		//variable input
		
		$nominal= $_POST['nominal'];

		mysqli_query($conn, "INSERT INTO nominal_bulanan(
										nominal)
									VALUES (
										'$nominal')") ;
		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "nominal_bulanan" AND $act == "edit") 
	{
		//variable input
		$idNominal = trim($_POST['id']);
		$nominal= $_POST['nominal'];

		mysqli_query($conn, "UPDATE nominal_bulanan SET 
										nominal= '$nominal' 
					WHERE idNominal = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "nominal_bulanan" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM nominal_bulanan WHERE idNominal = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>