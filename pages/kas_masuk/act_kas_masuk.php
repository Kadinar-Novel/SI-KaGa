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

	if ($mod == "kas_masuk" AND $act == "edit") 
	{
		//variable input
		$idKas = trim($_POST['id']);

		$a = mysqli_query($conn, "select * from kas_masuk where idKas='$idKas'");
		$b = mysqli_fetch_array($a);

		$tglBayar = $_POST['tglBayar'];
		$no_rumah= $_POST['no_rumah'];
		$bayar = $_POST['bayar'];

		if(!empty($_POST['januari'])){
			$januari = !empty($b['januari']) ? $b['januari'] : $tglBayar ;
			$janBayar = $bayar;
		}else{
			$januari = '';
			$janBayar = '';
		}
		if(!empty($_POST['februari'])){
			$februari= !empty($b['februari']) ? $b['februari'] : $tglBayar;
			$febBayar = $bayar;
		}else{
			$februari = '';
			$febBayar = '';
		}
		if(!empty($_POST['maret'])){
			$maret= !empty($b['maret']) ? $b['maret'] : $tglBayar; 
			$marBayar = $bayar;
		}else{
			$maret = '';
			$marBayar = '';
		}
		if(!empty($_POST['april'])){
			$april= !empty($b['april']) ? $b['april'] : $tglBayar; 
			$aprBayar = $bayar;
		}else{
			$april = '';
			$aprBayar = '';
		}
		if(!empty($_POST['mei'])){
			$mei= !empty($b['mei']) ? $b['mei'] : $tglBayar;
			$meiBayar = $bayar;
		}else{
			$mei = '';
			$meiBayar = '';
		}
		if(!empty($_POST['juni'])){
			$juni= !empty($b['juni']) ? $b['juni'] : $tglBayar;
			$junBayar = $bayar;
		}else{
			$juni = '';
			$junBayar = '';
		}
		if(!empty($_POST['juli'])){
			$juli= !empty($b['juli']) ? $b['juli'] : $tglBayar;
			$julBayar = $bayar;
		}else{
			$juli = '';
			$julBayar = '';
		}
		if(!empty($_POST['agustus'])){
			$agustus= !empty($b['agustus']) ? $b['agustus'] : $tglBayar;
			$aguBayar = $bayar;
		}else{
			$agustus = '';
			$aguBayar = '';
		}
		if(!empty($_POST['september'])){
			$september= !empty($b['september']) ? $b['september'] : $tglBayar;
			$sepBayar = $bayar;
		}else{
			$september = '';
			$sepBayar = '';
		}
		if(!empty($_POST['oktober'])){
			$oktober= !empty($b['oktober']) ? $b['oktober'] : $tglBayar;
			$oktBayar = $bayar;
		}else{
			$oktober = '';
			$oktBayar = '';
		}
		if(!empty($_POST['november'])){
			$november= !empty($b['november']) ? $b['november'] : $tglBayar;
			$novBayar = $bayar;
		}else{
			$november = '';
			$novBayar = '';
		}
		if(!empty($_POST['desember'])){
			$desember= !empty($b['desember']) ? $b['desember'] : $tglBayar;
			$desBayar = $bayar;
		}else{
			$desember = '';
			$desBayar = '';
		}
		
		$totBayar = $bayar*$_POST['bulanDibayar'];
		$tahun= $_POST['tahun'];
		$total= $b['total']+$totBayar;

		mysqli_query($conn, "UPDATE kas_masuk SET  
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
										bayarJan = '$janBayar',
										bayarFeb = '$febBayar',
										bayarMar = '$marBayar',
										bayarApr = '$aprBayar',
										bayarMei = '$meiBayar',
										bayarJun = '$junBayar',
										bayarJul = '$julBayar',
										bayarAgu = '$aguBayar',
										bayarSep = '$sepBayar',
										bayarOkt = '$oktBayar',
										bayarNov = '$novBayar',
										bayarDes = '$desBayar',
										total= '$total' 
					WHERE idKas = '$_POST[id]'");
		echo"<script>
			window.history.go(-2);
		</script>";
	}elseif ($mod == "kas_masuk" AND $act == "simpan_periode") {
		$tahun = $_POST['tahun'];
		$noRumah = array('A1','A2','A3','A3','A5','B1','B2','B3','B4','B5');
		$count = count($noRumah);

		for($i=0;$i<$count;$i++){
			$ins = "insert into kas_masuk (no_rumah,tahun) values ('".$noRumah[$i]."','$tahun')";
			$qry = mysqli_query($conn, $ins);
		}

		echo"<script>
			window.history.go(-2);
		</script>";
	}

?>