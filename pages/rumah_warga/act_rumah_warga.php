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

	if($mod == "rumah_warga" AND $act == "simpan")
	{
		//variable input
		
		$no_rumah= $_POST['no_rumah'];

		mysqli_query($conn, "INSERT INTO kas_masuk(
										no_rumah)
									VALUES (
										'$no_rumah')") ;
		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "rumah_warga" AND $act == "edit") 
	{
		//variable input
		$id_user = trim($_POST['id']);
		$no_rumah= $_POST['no_rumah'];

		mysqli_query($conn, "UPDATE kas_masuk SET 
										no_rumah= '$no_rumah' 
					WHERE idKas = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "rumah_warga" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM kas_masuk WHERE idKas = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>