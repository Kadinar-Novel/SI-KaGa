<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=nominal_bulanan';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/nominal_bulanan/act_nominal_bulanan.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=nominal_bulanan&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM nominal_bulanan WHERE idNominal = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=nominal_bulanan");
				}

			}
			else
			{
				$act = "$aksi?page=nominal_bulanan&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'> Nominal Kas</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data' >
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idNominal']) ? $c['idNominal'] : '';?><?php echo"'"?> <?php echo isset($c['idNominal']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >NOMINAL</label>
					<input type='text' class='form-control' placeholder='Nominal' name='nominal' value='"?><?php echo isset($c['nominal']) ? $c['nominal'] : '';?><?php echo"'"?> <?php echo isset($c['nominal']) ? ' ' : ' ';?><?php echo" >
										</div><div class='box-footer'>
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
              <h3 class='box-title'>Nominal Kas</h3><br/>
			  <small>Halaman untuk update nominal pembayaran kas</small>
            </div>
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>NOMINAL</th>
						<th>Action</th>
                </tr>
                </thead>
                <tbody>";
				$query = "SELECT * FROM nominal_bulanan ";
				$sql_kul = mysqli_query($conn, $query);
				$fd_kul = mysqli_num_rows($sql_kul);
				
	
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						echo"<tr>
						
							<td>$no</td>
							<td>$m[nominal]</td>
							<td><a href='index.php?page=nominal_bulanan&act=form&id=$m[idNominal]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a> 
							</td>
						
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