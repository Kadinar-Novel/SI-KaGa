<?php


	function nama_m($id)
	{
		$sql = mysql_query("SELECT * FROM menu WHERE id_menu = '$id'") or die(mysql_error());
		$m = mysql_fetch_assoc($sql);

		return $m['nama_menu'];
	}

	function anti_inject($data)
	{
		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
		return $filter_sql;
	}

	function rupiah($angka){
		$rupiah="";
		$rp=strlen($angka);
		while ($rp>3)
		{
		$rupiah = ".". substr($angka,-3). $rupiah;
		$s=strlen($angka) - 3;
		$angka=substr($angka,0,$s);
		$rp=strlen($angka);
		}
		$rupiah = "Rp." . $angka . $rupiah . ",-";
		return $rupiah;
	}

	function tampil_tgl($cdate){
		$dayarr = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
		$montharr = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei',   'Juni',   'Juli',   'Agustus',   'September',   'Oktober',   'November',   'Desember');
		
		$cdate = mktime(0, 0, 0, date('m',strtotime($cdate)),date('d',strtotime($cdate)),date('Y',strtotime($cdate)));
		$cdate = $dayarr[intval(date('w', $cdate))] .', '.date('d', $cdate) .' '. $montharr[intval(date('n', $cdate))].' '.date('Y', $cdate);
		return $cdate;		
	}


?>