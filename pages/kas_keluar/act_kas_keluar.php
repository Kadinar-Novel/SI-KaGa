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

	if($mod == "kas_keluar" AND $act == "simpan")
	{
		//variable input
		
		$bulan= $_POST['bulan'];
		$tahun= $_POST['tahun'];
		$jenis_pengeluaran= $_POST['jenis_pengeluaran'];
		$deskripsi_pengeluaran= $_POST['deskripsi_pengeluaran'];
		$tgl_pengeluaran= $_POST['tgl_pengeluaran'];
		$nominal= $_POST['nominal'];

		mysqli_query($conn, "INSERT INTO kas_keluar(
										bulan, 
										tahun, 
										jenis_pengeluaran, 
										deskripsi_pengeluaran, 
										tgl_pengeluaran,
										nominal)
									VALUES (
										'$bulan', 
										'$tahun', 
										'$jenis_pengeluaran', 
										'$deskripsi_pengeluaran', 
										'$tgl_pengeluaran',
										'$nominal')") ;
		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "kas_keluar" AND $act == "edit") 
	{
		//variable input
		$idKasKeluar = trim($_POST['id']);
		$bulan= $_POST['bulan'];
		$tahun= $_POST['tahun'];
		$jenis_pengeluaran= $_POST['jenis_pengeluaran'];
		$deskripsi_pengeluaran= $_POST['deskripsi_pengeluaran'];
		$tgl_pengeluaran= $_POST['tgl_pengeluaran'];
		$nominal= $_POST['nominal'];

		mysqli_query($conn, "UPDATE kas_keluar SET 
										bulan= '$bulan', 
										tahun= '$tahun', 
										jenis_pengeluaran= '$jenis_pengeluaran', 
										deskripsi_pengeluaran= '$deskripsi_pengeluaran', 
										tgl_pengeluaran= '$tgl_pengeluaran',
										nominal= '$nominal'
					WHERE idKasKeluar = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "kas_keluar" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM kas_keluar WHERE idKasKeluar = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>