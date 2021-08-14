<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=rumah_warga';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/rumah_warga/act_rumah_warga.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=rumah_warga&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM kas_masuk WHERE idKas = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=rumah_warga");
				}

			}
			else
			{
				$act = "$aksi?page=rumah_warga&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Input/Edit Nomor Rumah Warga</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idKas']) ? $c['idKas'] : '';?><?php echo"'"?> <?php echo isset($c['idKas']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >Nomor Rumah</label>
					<input type='text' class='form-control' placeholder='Nomor Rumah' name='no_rumah' value='"?><?php echo isset($c['no_rumah']) ? $c['no_rumah'] : '';?><?php echo"'"?> <?php echo isset($c['no_rumah']) ? ' ' : ' ';?><?php echo" >
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
              <h3 class='box-title'>Rumah Warga</h3><br/>
			  <small>Halaman untuk update nomor rumah</small><br/><br/>
			  <a href='index.php?page=rumah_warga&act=form' class='w3-btn w3-big w3-blue' style='font-size:16px'><i class='fa fa-file'></i> ADD DATA</a>
            </div>
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>Nomor Rumah</th>
                </tr>
                </thead>
                <tbody>";
				$query = "SELECT * FROM kas_masuk ";
				$sql_kul = mysqli_query($conn, $query);
	
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						echo"<tr>
						
							<td>$no</td>
							<td>$m[no_rumah]</td>
							<td><a href='index.php?page=rumah_warga&act=form&id=$m[idKas]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a> 
							<a href='$aksi?page=rumah_warga&act=hapus&id=$m[idKas]' onclick=\"return confirm('Are You sure want to delete?');\"><i class='fa fa-trash w3-large w3-text-red'></i></a></td>
						
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