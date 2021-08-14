<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=kas_masuk';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$getNominal = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM nominal_bulanan"));

	$aksi = 'pages/kas_masuk/act_kas_masuk.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=kas_masuk&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM kas_masuk WHERE idKas = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=kas_masuk");
				}

			}
			else
			{
				$act = "$aksi?page=kas_masuk&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'> Kas</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idKas']) ? $c['idKas'] : '';?><?php echo"'"?> <?php echo isset($c['idKas']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >NO RUMAH</label>
					<input type='text' class='form-control' placeholder='No Rumah' name='no_rumah' value='"?><?php echo isset($c['no_rumah']) ? $c['no_rumah'] : '';?><?php echo"'"?> <?php echo isset($c['no_rumah']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >TAHUN</label>
					<input type='text' class='form-control' placeholder='Tahun' name='tahun' value='"?><?php echo empty($c['tahun']) ? date('Y') : $c['tahun'];?><?php echo"' >
										</div>
					<div class='form-group'><label >JUMLAH BULAN DIBAYAR</label>
						<input type='text' class='form-control' placeholder='Masukkan berapa jumlah bulan' name='bulanDibayar' value='' >
					</div>
					<div class='form-group'><label >PILIH BULAN DIBAYAR</label>
					<div class='checkbox'>
	                    <label>
	                      <input type='checkbox' name='januari' value='"?><?php echo !empty($c['januari']) ? $c['januari'] : 'januari'; echo "'"?> <?php echo !empty($c['januari']) ? 'checked' : '' ; echo ">
	                      Januari
	                    </label>
	                    <label>
	                      <input type='checkbox' name='februari' value='"?><?php echo !empty($c['februari']) ? $c['februari'] : 'februari'; echo "'"?> <?php echo !empty($c['februari']) ? 'checked' : '' ; echo ">
	                      Februari
	                    </label>
	                    <label>
	                      <input type='checkbox' name='maret' value='"?><?php echo !empty($c['maret']) ? $c['maret'] : 'maret'; echo "'"?> <?php echo !empty($c['maret']) ? 'checked' : '' ; echo ">
	                      Maret
	                    </label>
	                    <label>
	                      <input type='checkbox' name='april' value='"?><?php echo !empty($c['april']) ? $c['april'] : 'april'; echo "'"?> <?php echo !empty($c['april']) ? 'checked' : '' ; echo ">
	                      April
	                    </label>
	                    <label>
	                      <input type='checkbox' name='mei' value='"?><?php echo !empty($c['mei']) ? $c['mei'] : 'mei'; echo "'"?> <?php echo !empty($c['mei']) ? 'checked' : '' ; echo ">
	                      Mei
	                    </label>
	                    <label>
	                      <input type='checkbox' name='juni' value='"?><?php echo !empty($c['juni']) ? $c['juni'] : 'juni'; echo "'"?> <?php echo !empty($c['juni']) ? 'checked' : '' ; echo ">
	                      Juni
	                    </label>
	                    <label>
	                      <input type='checkbox' name='juli' value='"?><?php echo !empty($c['juli']) ? $c['juli'] : 'juli'; echo "'"?> <?php echo !empty($c['juli']) ? 'checked' : '' ; echo ">
	                      Juli
	                    </label>
	                    <label>
	                      <input type='checkbox' name='agustus' value='"?><?php echo !empty($c['agustus']) ? $c['agustus'] : 'agustus'; echo "'"?> <?php echo !empty($c['agustus']) ? 'checked' : '' ; echo ">
	                      Agustus
	                    </label>
	                    <label>
	                      <input type='checkbox' name='september' value='"?><?php echo !empty($c['september']) ? $c['september'] : 'september'; echo "'"?> <?php echo !empty($c['september']) ? 'checked' : '' ; echo ">
	                      September
	                    </label>
	                    <label>
	                      <input type='checkbox' name='oktober' value='"?><?php echo !empty($c['oktober']) ? $c['oktober'] : 'oktober'; echo "'"?> <?php echo !empty($c['oktober']) ? 'checked' : '' ; echo ">
	                      Oktober
	                    </label>
	                    <label>
	                      <input type='checkbox' name='november' value='"?><?php echo !empty($c['november']) ? $c['november'] : 'november'; echo "'"?> <?php echo !empty($c['november']) ? 'checked' : '' ; echo ">
	                      November
	                    </label>
	                    <label>
	                      <input type='checkbox' name='desember' value='"?><?php echo !empty($c['desember']) ? $c['desember'] : 'desember'; echo "'"?> <?php echo !empty($c['desember']) ? 'checked' : '' ; echo ">
	                      Desember
	                    </label>
                  	</div>					
					<div class='form-group'><label >Tanggal Bayar</label>
					<input type='text' class='form-control' name='tglBayar' value='".date('Y-m-d', strtotime('now'))."' id='datepicker'>
					<input type='hidden' class='form-control' name='bayar' value='".$getNominal['nominal']."'>
					</div>
					<div class='form-group'><label >TOTAL SUDAH DIBAYAR</label>
					<input type='text' class='form-control' placeholder='Total' name='total' value='"?><?php echo isset($c['total']) ? $c['total'] : '';?><?php echo"'"?> <?php echo isset($c['total']) ? ' ' : ' ';?><?php echo" readonly>
										</div><div class='box-footer'>
					<button type='submit' class='btn btn-primary'>Submit</button> <button type='button' class='btn btn-primary' onclick='history.back()'><i class='fa fa-rotate-left'></i> Kembali</button>
				</div>
			  </div>			
            </form>
          </div>
        </div>
		";
		break;
		case 'new_periode':		
			$act = "$aksi?page=kas_masuk&act=simpan_periode";

			echo"<div class='col-md-12'>
	          <div class='box box-primary'>
	            <div class='box-header with-border'>
	              <h3 class='box-title'> Kas</h3>
				</div>";
				
	            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
	             <div class='box-body'>
					<div class='form-group'><label >TAHUN</label>
					<input type='text' class='form-control' placeholder='Input Tahun Berjalan' name='tahun' value='".date('Y')."' >
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
              <h3 class='box-title'>Kas</h3><br/>
			  <small>Halaman untuk update data kas</small><br/><br/>
			  <a href='index.php?page=kas_masuk&act=new_periode' class='w3-btn w3-big w3-blue' style='font-size:16px'><i class='fa fa-file'></i> INPUT PERIODE BARU</a><br/><br/>
			  Periode Tahun: 
			  <form action='".$act."' method='post'>
			  	<select name='tahun'>
			  		";
			  		$thn_skr = date('Y');
	                for ($x = $thn_skr; $x >= 2018; $x--) {
	                ?>
	                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
	                <?php
	                }

		echo "
			  	</select>&nbsp;&nbsp;<button type='submit'>CARI</button>
			  </form>
            </div>
            <div class='box-body'>
              <table id='example3' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>NO RUMAH</th>
						<th>JANUARI</th>
						<th>FEBRUARI</th>
						<th>MARET</th>
						<th>APRIL</th>
						<th>MEI</th>
						<th>JUNI</th>
						<th>JULI</th>
						<th>AGUSTUS</th>
						<th>SEPTEMBER</th>
						<th>OKTOBER</th>
						<th>NOVEMBER</th>
						<th>DESEMBER</th>
						<th>TOTAL</th>
						<th>Action</th>
                </tr>
                </thead>
                <tbody>";
                $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : date('Y');
				$query = "SELECT * FROM kas_masuk WHERE tahun='$tahun'";
				$sql_kul = mysqli_query($conn, $query);
			
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						$januari = !empty($m['januari']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['januari']))."" : "" ;
						$februari = !empty($m['februari']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['februari']))."" : "" ;
						$maret = !empty($m['maret']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['maret']))."" : "" ;
						$april = !empty($m['april']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['april']))."" : "" ;
						$mei = !empty($m['mei']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['mei']))."" : "" ;
						$juni = !empty($m['juni']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['juni']))."" : "" ;
						$juli = !empty($m['juli']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['juli']))."" : "" ;
						$agustus = !empty($m['agustus']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['agustus']))."" : "" ;
						$september = !empty($m['september']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['september']))."" : "" ;
						$oktober = !empty($m['oktober']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['oktober']))."" : "" ;
						$november = !empty($m['november']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['november']))."" : "" ;
						$desember = !empty($m['desember']) ? "<i class='fa fa-fw fa-check-square-o'><br/>".date('d-M',strtotime($m['desember']))."" : "" ;
						echo"<tr>
						
							<td>$no</td>
							<td>$m[no_rumah]</td>
							<td align='center'>".$januari."</td>
							<td align='center'>".$februari."</td>
							<td align='center'>".$maret."</td>
							<td align='center'>".$april."</td>
							<td align='center'>".$mei."</td>
							<td align='center'>".$juni."</td>
							<td align='center'>".$juli."</td>
							<td align='center'>".$agustus."</td>
							<td align='center'>".$september."</td>
							<td align='center'>".$oktober."</td>
							<td align='center'>".$november."</td>
							<td align='center'>".$desember."</td>
							<td align='center'>".rupiah($m['total'])."</td>
							<td align='center'><a href='index.php?page=kas_masuk&act=form&id=$m[idKas]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a></td>
						
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