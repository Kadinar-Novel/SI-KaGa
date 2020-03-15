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

	if($mod == "report" AND $act == "simpan")
	{
		//variable input
		
		$no_rumah= $_POST['no_rumah'];
		$januari= $_POST['januari'];
		$februari= $_POST['februari'];
		$maret= $_POST['maret'];
		$april= $_POST['april'];
		$mei= $_POST['mei'];
		$juni= $_POST['juni'];
		$juli= $_POST['juli'];
		$agustus= $_POST['agustus'];
		$september= $_POST['september'];
		$oktober= $_POST['oktober'];
		$november= $_POST['november'];
		$desember= $_POST['desember'];
		$tahun= $_POST['tahun'];
		$total= $_POST['total'];
		$modtime= $_POST['modtime'];

		mysqli_query($conn, "INSERT INTO report(
										no_rumah, 
										januari, 
										februari, 
										maret, 
										april, 
										mei, 
										juni, 
										juli, 
										agustus, 
										september, 
										oktober, 
										november, 
										desember, 
										tahun, 
										total, 
										modtime)
									VALUES (
										'$no_rumah', 
										'$januari', 
										'$februari', 
										'$maret', 
										'$april', 
										'$mei', 
										'$juni', 
										'$juli', 
										'$agustus', 
										'$september', 
										'$oktober', 
										'$november', 
										'$desember', 
										'$tahun', 
										'$total', 
										'$modtime')") ;
		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "report" AND $act == "edit") 
	{
		//variable input
		$idKas = trim($_POST['id']);
		$no_rumah= $_POST['no_rumah'];
		$januari= $_POST['januari'];
		$februari= $_POST['februari'];
		$maret= $_POST['maret'];
		$april= $_POST['april'];
		$mei= $_POST['mei'];
		$juni= $_POST['juni'];
		$juli= $_POST['juli'];
		$agustus= $_POST['agustus'];
		$september= $_POST['september'];
		$oktober= $_POST['oktober'];
		$november= $_POST['november'];
		$desember= $_POST['desember'];
		$tahun= $_POST['tahun'];
		$total= $_POST['total'];
		$modtime= $_POST['modtime'];

		mysqli_query($conn, "UPDATE report SET 
										no_rumah= '$no_rumah', 
										januari= '$januari', 
										februari= '$februari', 
										maret= '$maret', 
										april= '$april', 
										mei= '$mei', 
										juni= '$juni', 
										juli= '$juli', 
										agustus= '$agustus', 
										september= '$september', 
										oktober= '$oktober', 
										november= '$november', 
										desember= '$desember', 
										tahun= '$tahun', 
										total= '$total', 
										modtime= '$modtime' 
					WHERE idKas = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "report" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM report WHERE idKas = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>