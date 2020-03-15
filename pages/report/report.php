<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=report';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/report/act_report.php';

	switch ($act) {
		case 'form':
		echo "
		";
		break;

		default :
		echo"
		<div class='col-xs-12'>
         <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Laporan Kas Warga</h3><br/>
			  <small>Halaman untuk melihat laporan kas warga</small><br/><br/>
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
			  ";
			  $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : date('Y');
			  $tahunLalu = $tahun-1;
			  ?>
			  <a href='pages/report/report_excel.php?tahun=<?php echo $tahun;?>'><h3>Export to Excell</h3></a>
			  <?php
			 
			  include "query_kas_masuk.php";
  			  include "query_kas_keluar.php";
			  include "saldo_tahun_lalu.php";

			  $totalSisaSaldo = $sisaSaldo+$saldoTerakhir;
			  echo "
            </div>
            <div class='box-body'>   
            <table width='100%' border=1>
            	<tr>
            		<td align='right' width='80%'>Saldo Tahun Lalu </td>
            		<td align='right' width='20%'><b>".number_format($saldoTerakhir)."</b></td>
            	</tr>
            </table>         
            <br/>
			<table class='tg'>
					  <tr>
					    <th class='tg-c3ow' rowspan='2'>No</th>
					    <th class='tg-c3ow' rowspan='2'>Bulan</th>
					    <th class='tg-c3ow' rowspan='2'>Tahun</th>
					    <th class='tg-ojok' colspan='4'>Uang Masuk</th>
					    <th class='tg-vswx' colspan='7'>Uang Keluar</th>
					    <th class='tg-baqh' rowspan='2'>Saldo</th>
					  </tr>
					  <tr>
					    <td class='tg-wnqi'>Jum. Rumah</td>
					    <td class='tg-wnqi'>IPL</td>
					    <td class='tg-wnqi'>Penerimaan Lain</td>
					    <td class='tg-wnqi'>Total</td>
					    <td class='tg-smvl'>Sampah<br></td>
					    <td class='tg-smvl'>Gaji Security</td>
					    <td class='tg-smvl'>Listrik</td>
					    <td class='tg-smvl'>Aqua, Kopi</td>
					    <td class='tg-smvl'>Jasa Taman</td>
					    <td class='tg-smvl'>Pengeluaran Lain</td>
					    <td class='tg-smvl'>Total</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>1</td>
					    <td class='tg-0lax'>Januari</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totJan."</td>
					    <td class='tg-0lax'>".number_format($sumJan)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainJan)."</td>
					    <td class='tg-0lax'>".number_format($total_januari)."</td>
					    <td class='tg-0lax'>".number_format($totJanSampah)."</td>
					    <td class='tg-0lax'>".number_format($totJanSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totJanListrik)."</td>
					    <td class='tg-0lax'>".number_format($totJanAqua)."</td>
					    <td class='tg-0lax'>".number_format($totJanTaman)."</td>
					    <td class='tg-0lax'>".number_format($totJanLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranJan)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasJan)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>2</td>
					    <td class='tg-0lax'>Februari</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totFeb."</td>
					    <td class='tg-0lax'>".number_format($sumFeb)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainFeb)."</td>
					    <td class='tg-0lax'>".number_format($total_februari)."</td>
					    <td class='tg-0lax'>".number_format($totFebSampah)."</td>
					    <td class='tg-0lax'>".number_format($totFebSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totFebListrik)."</td>
					    <td class='tg-0lax'>".number_format($totFebAqua)."</td>
					    <td class='tg-0lax'>".number_format($totFebTaman)."</td>
					    <td class='tg-0lax'>".number_format($totFebLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranFeb)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasFeb)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>3</td>
					    <td class='tg-0lax'>Maret</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totMar."</td>
					    <td class='tg-0lax'>".number_format($sumMar)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainMar)."</td>
					    <td class='tg-0lax'>".number_format($total_maret)."</td>
					    <td class='tg-0lax'>".number_format($totMarSampah)."</td>
					    <td class='tg-0lax'>".number_format($totMarSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totMarListrik)."</td>
					    <td class='tg-0lax'>".number_format($totMarAqua)."</td>
					    <td class='tg-0lax'>".number_format($totMarTaman)."</td>
					    <td class='tg-0lax'>".number_format($totMarLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranMar)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasMar)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>4</td>
					    <td class='tg-0lax'>April</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totApr."</td>
					    <td class='tg-0lax'>".number_format($sumApr)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainApr)."</td>
					    <td class='tg-0lax'>".number_format($total_april)."</td>
					    <td class='tg-0lax'>".number_format($totAprSampah)."</td>
					    <td class='tg-0lax'>".number_format($totAprSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totAprListrik)."</td>
					    <td class='tg-0lax'>".number_format($totAprAqua)."</td>
					    <td class='tg-0lax'>".number_format($totAprTaman)."</td>
					    <td class='tg-0lax'>".number_format($totAprLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranApr)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasApr)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>5</td>
					    <td class='tg-0lax'>Mei</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totMei."</td>
					    <td class='tg-0lax'>".number_format($sumMei)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainMei)."</td>
					    <td class='tg-0lax'>".number_format($total_mei)."</td>
					    <td class='tg-0lax'>".number_format($totMeiSampah)."</td>
					    <td class='tg-0lax'>".number_format($totMeiSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totMeiListrik)."</td>
					    <td class='tg-0lax'>".number_format($totMeiAqua)."</td>
					    <td class='tg-0lax'>".number_format($totMeiTaman)."</td>
					    <td class='tg-0lax'>".number_format($totMeiLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranMei)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasMei)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>6</td>
					    <td class='tg-0lax'>Juni</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totJun."</td>
					    <td class='tg-0lax'>".number_format($sumJun)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainJun)."</td>
					    <td class='tg-0lax'>".number_format($total_juni)."</td>
					    <td class='tg-0lax'>".number_format($totJunSampah)."</td>
					    <td class='tg-0lax'>".number_format($totJunSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totJunListrik)."</td>
					    <td class='tg-0lax'>".number_format($totJunAqua)."</td>
					    <td class='tg-0lax'>".number_format($totJunTaman)."</td>
					    <td class='tg-0lax'>".number_format($totJunLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranJun)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasJun)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>7</td>
					    <td class='tg-0lax'>Juli</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totJul."</td>
					    <td class='tg-0lax'>".number_format($sumJul)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainJul)."</td>
					    <td class='tg-0lax'>".number_format($total_juli)."</td>
					    <td class='tg-0lax'>".number_format($totJulSampah)."</td>
					    <td class='tg-0lax'>".number_format($totJulSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totJulListrik)."</td>
					    <td class='tg-0lax'>".number_format($totJulAqua)."</td>
					    <td class='tg-0lax'>".number_format($totJulTaman)."</td>
					    <td class='tg-0lax'>".number_format($totJulLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranJul)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasJul)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>8</td>
					    <td class='tg-0lax'>Agustus</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totAgu."</td>
					    <td class='tg-0lax'>".number_format($sumAgu)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainAgu)."</td>
					    <td class='tg-0lax'>".number_format($total_agustus)."</td>
					    <td class='tg-0lax'>".number_format($totAguSampah)."</td>
					    <td class='tg-0lax'>".number_format($totAguSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totAguListrik)."</td>
					    <td class='tg-0lax'>".number_format($totAguAqua)."</td>
					    <td class='tg-0lax'>".number_format($totAguTaman)."</td>
					    <td class='tg-0lax'>".number_format($totAguLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranAgu)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasAgu)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>9</td>
					    <td class='tg-0lax'>September</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totSep."</td>
					    <td class='tg-0lax'>".number_format($sumSep)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainSep)."</td>
					    <td class='tg-0lax'>".number_format($total_september)."</td>
					    <td class='tg-0lax'>".number_format($totSepSampah)."</td>
					    <td class='tg-0lax'>".number_format($totSepSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totSepListrik)."</td>
					    <td class='tg-0lax'>".number_format($totSepAqua)."</td>
					    <td class='tg-0lax'>".number_format($totSepTaman)."</td>
					    <td class='tg-0lax'>".number_format($totSepLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranSep)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasSep)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>10</td>
					    <td class='tg-0lax'>Oktober</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totOkt."</td>
					    <td class='tg-0lax'>".number_format($sumOkt)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainOkt)."</td>
					    <td class='tg-0lax'>".number_format($total_oktober)."</td>
					    <td class='tg-0lax'>".number_format($totOktSampah)."</td>
					    <td class='tg-0lax'>".number_format($totOktSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totOktListrik)."</td>
					    <td class='tg-0lax'>".number_format($totOktAqua)."</td>
					    <td class='tg-0lax'>".number_format($totOktTaman)."</td>
					    <td class='tg-0lax'>".number_format($totOktLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranOkt)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasOkt)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>11</td>
					    <td class='tg-0lax'>November</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totNov."</td>
					    <td class='tg-0lax'>".number_format($sumNov)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainNov)."</td>
					    <td class='tg-0lax'>".number_format($total_november)."</td>
					    <td class='tg-0lax'>".number_format($totNovSampah)."</td>
					    <td class='tg-0lax'>".number_format($totNovSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totNovListrik)."</td>
					    <td class='tg-0lax'>".number_format($totNovAqua)."</td>
					    <td class='tg-0lax'>".number_format($totNovTaman)."</td>
					    <td class='tg-0lax'>".number_format($totNovLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranNov)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasNov)."</td>
					  </tr>
					  <tr>
					    <td class='tg-0lax'>12</td>
					    <td class='tg-0lax'>Desember</td>
					    <td class='tg-0lax'>".$tahun."</td>
					    <td class='tg-0lax'>".$totDes."</td>
					    <td class='tg-0lax'>".number_format($sumDes)."</td>
					    <td class='tg-0lax'>".number_format($totMasukLainDes)."</td>
					    <td class='tg-0lax'>".number_format($total_desember)."</td>
					    <td class='tg-0lax'>".number_format($totDesSampah)."</td>
					    <td class='tg-0lax'>".number_format($totDesSecurity)."</td>
					    <td class='tg-0lax'>".number_format($totDesListrik)."</td>
					    <td class='tg-0lax'>".number_format($totDesAqua)."</td>
					    <td class='tg-0lax'>".number_format($totDesTaman)."</td>
					    <td class='tg-0lax'>".number_format($totDesLain)."</td>
					    <td class='tg-0lax'>".number_format($totPengeluaranDes)."</td>
					    <td class='tg-0lax'>".number_format($saldoKasDes)."</td>
					  </tr>
					  <tr>
					    <td align='right' colspan='14'>Sisa Saldo</td>
					    <td class='tg-0lax'>".rupiah($sisaSaldo)."</td>
					  </tr>
					  <tr>
					    <td align='right' colspan='14'>Total Sisa Saldo</td>
					    <td class='tg-0lax'><b>".rupiah($totalSisaSaldo)."</b></td>
					  </tr>
					</table>
					<br/>
					<div>
						<div class='col-md-6'><h3>Detail Pemasukan Selain IPL</h3></div>
						<div class='col-md-6'><h3>Detail Pengeluaran</h3></div>						
					</div>
					<div>
						<div class='col-md-6'>
							<div class='box-body'>
				              <table class='table table-bordered table-striped' border=1>
				                <thead>
				                <tr>
									<th>No</th>
										<th>TGL PEMASUKAN</th>
										<th>DESKRIPSI PEMASUKAN</th>
										<th>NOMINAL</th>									
				                </tr>
				                </thead>
				                <tbody>";
								$query = "SELECT * FROM kas_masuk_lain where tahun = '$tahun' order by idKasMasukLain desc";
								$sql_kul = mysqli_query($conn, $query);
								$fd_kul = mysqli_num_rows($sql_kul);
				
								if($fd_kul > 0)
								{
									$no =  1;
									$detailPemasukan = 0;
									while ($m = mysqli_fetch_assoc($sql_kul)) {
										echo"<tr>
											<td>$no</td>
											<td>".tampil_tgl($m['tgl_pemasukan'])."</td>
											<td>$m[deskripsi_pemasukan]</td>
											<td>".rupiah($m['nominal'])."</td>									
										</tr>";
										$no++;
										$detailPemasukan = $detailPemasukan+$m['nominal'];
									}
									echo "
										<tr>
											<td colspan='3' align='right'>Total Pengeluaran</td>
											<td><b>".rupiah($detailPemasukan)."</b></td>
										</tr>
									";
								}
								else
								{
									echo"<tr>
										<td><div class='w3-center'><i>Detail pemasukan tidak ada.</i></div></td>
									</tr>";
								}
								
				                echo "</tbody>
				                <tfoot>
				                </tfoot>
				              </table>
				            </div>
            			</div>
						<div class='col-md-6'>
							<div class='box-body'>
				              <table class='table table-bordered table-striped' border=1>
				                <thead>
				                <tr>
									<th>No</th>
									<th>TGL PENGELUARAN</th>
									<th>JENIS PENGELUARAN</th>
									<th>DESKRIPSI PENGELUARAN</th>
									<th>NOMINAL</th>									
				                </tr>
				                </thead>
				                <tbody>";
								$query = "SELECT * FROM kas_keluar where tahun = '$tahun' and jenis_pengeluaran = '6' order by idKasKeluar desc";
								$sql_kul = mysqli_query($conn, $query);
								$fd_kul = mysqli_num_rows($sql_kul);
				
								if($fd_kul > 0)
								{
									function jnsPengeluaran($idPengeluaran){
										include "lib/conn.php";
										$query = mysqli_query($conn, "select nama_pengeluaran from jenis_pengeluaran where idJenisPengeluaran='$idPengeluaran' ");
										$data = mysqli_fetch_array($query);
										$nama = $data['nama_pengeluaran'];
										return $nama;
									}
									$no =  1;
									$detailPengeluaran = 0;
									while ($m = mysqli_fetch_assoc($sql_kul)) {
										echo"<tr>
										
											<td>$no</td>
											<td>".tampil_tgl($m['tgl_pengeluaran'])."</td>
											<td>".jnsPengeluaran($m['jenis_pengeluaran'])."</td>
											<td>$m[deskripsi_pengeluaran]</td>
											<td>".number_format($m['nominal'])."</td>
											
										
										</tr>";
										$detailPengeluaran = $detailPengeluaran+$m['nominal'];
										$no++;
									}
									echo "
										<tr>
											<td colspan='4' align='right'>Total Pengeluaran</td>
											<td><b>".rupiah($detailPengeluaran)."</b></td>
										</tr>
									";
								} else
								{
									echo"<tr>
										<td><div class='w3-center'><i>Detail pengeluaran tidak ada.</i></div></td>
									</tr>";
								}
								
				                echo "</tbody>
				                <tfoot>
				                </tfoot>
				              </table>
				            </div>
						</div>
					</div>	             
            </div>
          </div>
        </div>";

		break;
	}

	
?>