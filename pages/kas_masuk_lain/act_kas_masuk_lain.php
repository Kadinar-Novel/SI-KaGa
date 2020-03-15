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

	if($mod == "kas_masuk_lain" AND $act == "simpan")
	{
		//variable input
		
		$bulan= $_POST['bulan'];
		$tahun= $_POST['tahun'];
		$deskripsi_pemasukan= $_POST['deskripsi_pemasukan'];
		$nominal= $_POST['nominal'];
		$tgl_pemasukan= $_POST['tgl_pemasukan'];

		mysqli_query($conn, "INSERT INTO kas_masuk_lain(
										bulan, 
										tahun, 
										deskripsi_pemasukan, 
										nominal, 
										tgl_pemasukan)
									VALUES (
										'$bulan', 
										'$tahun', 
										'$deskripsi_pemasukan', 
										'$nominal', 
										'$tgl_pemasukan')") ;
		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "kas_masuk_lain" AND $act == "edit") 
	{
		//variable input
		$idKasMasukLain = trim($_POST['id']);
		$bulan= $_POST['bulan'];
		$tahun= $_POST['tahun'];
		$deskripsi_pemasukan= $_POST['deskripsi_pemasukan'];
		$nominal= $_POST['nominal'];
		$tgl_pemasukan= $_POST['tgl_pemasukan'];

		mysqli_query($conn, "UPDATE kas_masuk_lain SET 
										bulan= '$bulan', 
										tahun= '$tahun', 
										deskripsi_pemasukan= '$deskripsi_pemasukan', 
										nominal= '$nominal', 
										tgl_pemasukan= '$tgl_pemasukan'
					WHERE idKasMasukLain = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "kas_masuk_lain" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM kas_masuk_lain WHERE idKasMasukLain = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>