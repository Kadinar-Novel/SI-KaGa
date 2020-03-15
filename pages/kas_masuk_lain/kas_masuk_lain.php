<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=kas_masuk_lain';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/kas_masuk_lain/act_kas_masuk_lain.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=kas_masuk_lain&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM kas_masuk_lain WHERE idKasMasukLain = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=kas_masuk_lain");
				}

			}
			else
			{
				$act = "$aksi?page=kas_masuk_lain&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'> Pemasukan Lainnya</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idKasMasukLain']) ? $c['idKasMasukLain'] : '';?><?php echo"'"?> <?php echo isset($c['idKasMasukLain']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >BULAN</label>
						<select name='bulan' class='form-control'>
							<option value=''>Pilih Bulan</option>
							<option value='JANUARI' "; if($c['bulan']=='JANUARI') {echo 'selected';} else {echo '';}; echo ">JANUARI</option>
							<option value='FEBRUARI' "; if($c['bulan']=='FEBRUARI') {echo 'selected';} else {echo '';}; echo ">FEBRUARI</option>
							<option value='MARET' "; if($c['bulan']=='MARET') {echo 'selected';} else {echo '';}; echo ">MARET</option>
							<option value='APRIL' "; if($c['bulan']=='APRIL') {echo 'selected';} else {echo '';}; echo ">APRIL</option>
							<option value='MEI' "; if($c['bulan']=='MEI') {echo 'selected';} else {echo '';}; echo ">MEI</option>
							<option value='JUNI' "; if($c['bulan']=='JUNI') {echo 'selected';} else {echo '';}; echo ">JUNI</option>
							<option value='JULI' "; if($c['bulan']=='JULI') {echo 'selected';} else {echo '';}; echo ">JULI</option>
							<option value='AGUSTUS' "; if($c['bulan']=='AGUSTUS') {echo 'selected';} else {echo '';}; echo ">AGUSTUS</option>
							<option value='SEPTEMBER' "; if($c['bulan']=='SEPTEMBER') {echo 'selected';} else {echo '';}; echo ">SEPTEMBER</option>
							<option value='OKTOBER' "; if($c['bulan']=='OKTOBER') {echo 'selected';} else {echo '';}; echo ">OKTOBER</option>
							<option value='NOVEMBER' "; if($c['bulan']=='NOVEMBER') {echo 'selected';} else {echo '';}; echo ">NOVEMBER</option>
							<option value='DESEMBER' "; if($c['bulan']=='DESEMBER') {echo 'selected';} else {echo '';}; echo ">DESEMBER</option>
						</select>
					</div>
					<div class='form-group'><label >TAHUN</label>
					<input type='text' class='form-control' placeholder='Tahun' name='tahun' value='"?><?php echo isset($c['tahun']) ? $c['tahun'] : '';?><?php echo"'"?> <?php echo isset($c['tahun']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >DESKRIPSI PEMASUKAN</label>
					<input type='text' class='form-control' placeholder='Deskripsi Pemasukan' name='deskripsi_pemasukan' value='"?><?php echo isset($c['deskripsi_pemasukan']) ? $c['deskripsi_pemasukan'] : '';?><?php echo"'"?> <?php echo isset($c['deskripsi_pemasukan']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >NOMINAL</label>
					<input type='text' class='form-control' placeholder='Nominal' name='nominal' value='"?><?php echo isset($c['nominal']) ? $c['nominal'] : '';?><?php echo"'"?> <?php echo isset($c['nominal']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >TGL PEMASUKAN</label>
					<input type='text' class='form-control' placeholder='Tgl Pemasukan' name='tgl_pemasukan' value='"?><?php echo isset($c['tgl_pemasukan']) ? $c['tgl_pemasukan'] :  date('Y-m-d', strtotime('now'));?><?php echo"'"?> <?php echo isset($c['tgl_pemasukan']) ? ' ' : ' ';?><?php echo" id='datepicker'>
										</div>
					<div class='box-footer'>
					<button type='submit' class='btn btn-primary'>Submit</button> <button type='button' class='btn btn-primary' onclick='history.back()'><i class='fa fa-rotate-left'></i> Kembali</button>
				</div>
			  </div>			
            </form>
          </div>
        </div>
		";
		break;

		default :
		echo"
		<div class='col-xs-12'>
         <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Pemasukan Lainnya</h3><br/>
			  <small>Halaman untuk update data pemasukan lainnya</small><br/><br/>
			  <a href='index.php?page=kas_masuk_lain&act=form' class='w3-btn w3-big w3-blue' style='font-size:16px'><i class='fa fa-file'></i> ADD DATA</a>
            </div>
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>BULAN</th>
						<th>TAHUN</th>
						<th>DESKRIPSI PEMASUKAN</th>
						<th>NOMINAL</th>
						<th>TGL PEMASUKAN</th>
						<th>Action</th>
                </tr>
                </thead>
                <tbody>";
				$query = "SELECT * FROM kas_masuk_lain ";
				$sql_kul = mysqli_query($conn, $query);
				$fd_kul = mysqli_num_rows($sql_kul);
				
				if($fd_kul > 0)
				{
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						echo"<tr>
						
							<td>$no</td>
							<td>$m[bulan]</td>
							<td>$m[tahun]</td>
							<td>$m[deskripsi_pemasukan]</td>
							<td>".rupiah($m['nominal'])."</td>
							<td>".tampil_tgl($m['tgl_pemasukan'])."</td>
							<td><a href='index.php?page=kas_masuk_lain&act=form&id=$m[idKasMasukLain]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a> 
							<a href='$aksi?page=kas_masuk_lain&act=hapus&id=$m[idKasMasukLain]' onclick=\"return confirm('Are You sure want to delete?');\"><i class='fa fa-trash w3-large w3-text-red'></i></a></td>
						
						</tr>";
						$no++;
					}
				}
				else
				{
					echo"<tr>
						<td colspan='8'><div class='w3-center'><i>Data Pemasukan Lainnya Not Found.</i></div></td>
					</tr>";
				}
				
				
                echo "</tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>";

		break;
	}

	
?>