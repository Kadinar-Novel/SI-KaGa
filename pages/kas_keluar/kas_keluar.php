<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=kas_keluar';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/kas_keluar/act_kas_keluar.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=kas_keluar&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM kas_keluar WHERE idKasKeluar = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=kas_keluar");
				}

			}
			else
			{
				$act = "$aksi?page=kas_keluar&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'> Pengeluaran</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idKasKeluar']) ? $c['idKasKeluar'] : '';?><?php echo"'"?> <?php echo isset($c['idKasKeluar']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >BULAN</label>
						<select name='bulan' class='form-control' required>
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
					<input type='text' class='form-control' placeholder='Tahun' name='tahun' value='"?><?php echo isset($c['tahun']) ? $c['tahun'] : date('Y');?><?php echo"'"?> <?php echo isset($c['tahun']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >JENIS PENGELUARAN</label>
						<select name='jenis_pengeluaran' class='form-control'>
							<option value=''>Silahkan Pilih</option>
							";
								$qry_type_toko = "SELECT * FROM jenis_pengeluaran order by idJenisPengeluaran";
								$queryTypeToko = mysqli_query($conn, $qry_type_toko);
								while($dataTypeToko=mysqli_fetch_array($queryTypeToko)){
									$selectTypeToko = ($dataTypeToko['idJenisPengeluaran']==$c['jenis_pengeluaran']) ?  "selected" : "";
							echo "<option value='".$dataTypeToko['idJenisPengeluaran']."' $selectTypeToko > ".$dataTypeToko['nama_pengeluaran']."</option>";
								}
							echo "
						</select>
					</div>					
					<div class='form-group'><label >DESKRIPSI PENGELUARAN</label>
					<input type='text' class='form-control' placeholder='Deskripsi Pengeluaran' name='deskripsi_pengeluaran' value='"?><?php echo isset($c['deskripsi_pengeluaran']) ? $c['deskripsi_pengeluaran'] : '';?><?php echo"'"?> <?php echo isset($c['deskripsi_pengeluaran']) ? ' ' : ' ';?><?php echo" >
					</div>
					<div class='form-group'><label >NOMINAL PENGELUARAN</label>
					<input type='text' class='form-control' placeholder='Jumlah nominal' name='nominal' value='"?><?php echo isset($c['nominal']) ? $c['nominal'] : '';?><?php echo"'"?> <?php echo isset($c['nominal']) ? ' ' : ' ';?><?php echo" >
					</div>
					<div class='form-group'><label >TGL PENGELUARAN</label>
					<input type='text' class='form-control' placeholder='Tgl Pengeluaran' name='tgl_pengeluaran' value='"?><?php echo isset($c['tgl_pengeluaran']) ? $c['tgl_pengeluaran'] : date('Y-m-d', strtotime('now'));?><?php echo"'"?> <?php echo isset($c['tgl_pengeluaran']) ? ' ' : ' ';?><?php echo" id='datepicker'>
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
              <h3 class='box-title'>Pengeluaran</h3><br/>
			  <small>Halaman untuk update data pengeluaran kas</small><br/><br/>
			  <a href='index.php?page=kas_keluar&act=form' class='w3-btn w3-big w3-blue' style='font-size:16px'><i class='fa fa-file'></i> ADD DATA</a>
            </div>
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>BULAN</th>
						<th>TAHUN</th>
						<th>JENIS PENGELUARAN</th>
						<th>DESKRIPSI PENGELUARAN</th>
						<th>NOMINAL</th>
						<th>TGL PENGELUARAN</th>
						<th>Action</th>
                </tr>
                </thead>
                <tbody>";
				$query = "SELECT * FROM kas_keluar order by idKasKeluar desc";
				$sql_kul = mysqli_query($conn, $query);

				function jnsPengeluaran($idPengeluaran){
					include "lib/conn.php";
					$query = mysqli_query($conn, "select nama_pengeluaran from jenis_pengeluaran where idJenisPengeluaran='$idPengeluaran' ");
					$data = mysqli_fetch_array($query);
					$nama = $data['nama_pengeluaran'];
					return $nama;
				}
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						echo"<tr>
						
							<td>$no</td>
							<td>$m[bulan]</td>
							<td>$m[tahun]</td>
							<td>".jnsPengeluaran($m['jenis_pengeluaran'])."</td>
							<td>$m[deskripsi_pengeluaran]</td>
							<td>".rupiah($m['nominal'])."</td>
							<td>".tampil_tgl($m['tgl_pengeluaran'])."</td>
							<td><a href='index.php?page=kas_keluar&act=form&id=$m[idKasKeluar]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a> 
							<a href='$aksi?page=kas_keluar&act=hapus&id=$m[idKasKeluar]' onclick=\"return confirm('Are You sure want to delete?');\"><i class='fa fa-trash w3-large w3-text-red'></i></a></td>
						
						</tr>";
						$no++;
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