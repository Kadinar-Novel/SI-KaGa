<?php
	session_start();
    include "../../lib/conn.php";
    mysqli_set_charset($conn,'utf8');

    $method = $_SERVER['REQUEST_METHOD'];


    $key = isset($_REQUEST['idKasMasukLain']) ? $_REQUEST['idKasMasukLain'] : '';
    
		$bulan= isset($_REQUEST['bulan']) ? $_REQUEST['bulan'] : '' ;
		$tahun= isset($_REQUEST['tahun']) ? $_REQUEST['tahun'] : '' ;
		$deskripsi_pemasukan= isset($_REQUEST['deskripsi_pemasukan']) ? $_REQUEST['deskripsi_pemasukan'] : '' ;
		$nominal= isset($_REQUEST['nominal']) ? $_REQUEST['nominal'] : '' ;
		$tgl_pemasukan= isset($_REQUEST['tgl_pemasukan']) ? $_REQUEST['tgl_pemasukan'] : '' ;
		$modtime= isset($_REQUEST['modtime']) ? $_REQUEST['modtime'] : '' ;
    switch ($method) {
        case 'GET':
          $sql = "SELECT * FROM kas_masuk_lain ".($key ?" WHERE idKasMasukLain =$key":''); 
        break;
        case 'PUT': $sql = "UPDATE kas_masuk_lain SET 
										bulan= '$bulan', 
										tahun= '$tahun', 
										deskripsi_pemasukan= '$deskripsi_pemasukan', 
										nominal= '$nominal', 
										tgl_pemasukan= '$tgl_pemasukan', 
										modtime= '$modtime' WHERE idKasMasukLain = $key ";
        break;
        case 'POST': $sql = "INSERT INTO kas_masuk_lain( 
										bulan, 
										tahun, 
										deskripsi_pemasukan, 
										nominal, 
										tgl_pemasukan, 
										modtime) VALUES (
										'$bulan', 
										'$tahun', 
										'$deskripsi_pemasukan', 
										'$nominal', 
										'$tgl_pemasukan', 
										'$modtime')";
        break;
        case 'DELETE':
           $sql = "DELETE FROM kas_masuk_lain WHERE idKasMasukLain = $key"; 
        break;
    }       
      // excecute SQL statement
      $result = mysqli_query($conn,$sql);
      
      // print results, insert id or affected row count
      if ($method == 'GET') {
		  $row = mysqli_num_rows($result);
          if ($row==0) {
              $data['status'] = 201;
              $data['msg'] = 'Data not found';
              echo json_encode($data);
          }else{
			$response = array();
			$response["data"] = array();
			while ($row = mysqli_fetch_assoc($result)) {
				$data = $row;
				array_push($response["data"], $data);
			}
			echo json_encode($response);			  
          }  
      } elseif ($method == 'POST') {
          if (!$result) {
              $data['status'] = 201;
              $data['msg'] = 'Insert failed';  
          }else{
              $data['status'] = 200;
              $data['msg'] = 'Insert successful';
          }
          echo json_encode($data);
      } elseif ($method == 'PUT') {
          if (!$result) {
              $data['status'] = 201;
              $data['msg'] = 'Update failed'; 
          }else{
              $data['status'] = 200;
              $data['msg'] = 'Update successful';
          }
          echo json_encode($data);
      } elseif ($method == 'DELETE') {
          if (!$result) {
              $data['status'] = 201;
              $data['msg'] = 'Delete failed';  
          }else{
              $data['status'] = 200;
              $data['msg'] = 'Delete successful';
          }
          echo json_encode($data);
      }
       
      // close mysql connection
      mysqli_close($conn);
?>