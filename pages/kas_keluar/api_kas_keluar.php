<?php
	session_start();
    include "../../lib/conn.php";
    mysqli_set_charset($conn,'utf8');

    $method = $_SERVER['REQUEST_METHOD'];


    $key = isset($_REQUEST['idKasKeluar']) ? $_REQUEST['idKasKeluar'] : '';
    
		$bulan= isset($_REQUEST['bulan']) ? $_REQUEST['bulan'] : '' ;
		$tahun= isset($_REQUEST['tahun']) ? $_REQUEST['tahun'] : '' ;
		$jenis_pengeluaran= isset($_REQUEST['jenis_pengeluaran']) ? $_REQUEST['jenis_pengeluaran'] : '' ;
		$deskripsi_pengeluaran= isset($_REQUEST['deskripsi_pengeluaran']) ? $_REQUEST['deskripsi_pengeluaran'] : '' ;
		$tgl_pengeluaran= isset($_REQUEST['tgl_pengeluaran']) ? $_REQUEST['tgl_pengeluaran'] : '' ;
		$modtime= isset($_REQUEST['modtime']) ? $_REQUEST['modtime'] : '' ;
    switch ($method) {
        case 'GET':
          $sql = "SELECT * FROM kas_keluar ".($key ?" WHERE idKasKeluar =$key":''); 
        break;
        case 'PUT': $sql = "UPDATE kas_keluar SET 
										bulan= '$bulan', 
										tahun= '$tahun', 
										jenis_pengeluaran= '$jenis_pengeluaran', 
										deskripsi_pengeluaran= '$deskripsi_pengeluaran', 
										tgl_pengeluaran= '$tgl_pengeluaran', 
										modtime= '$modtime' WHERE idKasKeluar = $key ";
        break;
        case 'POST': $sql = "INSERT INTO kas_keluar( 
										bulan, 
										tahun, 
										jenis_pengeluaran, 
										deskripsi_pengeluaran, 
										tgl_pengeluaran, 
										modtime) VALUES (
										'$bulan', 
										'$tahun', 
										'$jenis_pengeluaran', 
										'$deskripsi_pengeluaran', 
										'$tgl_pengeluaran', 
										'$modtime')";
        break;
        case 'DELETE':
           $sql = "DELETE FROM kas_keluar WHERE idKasKeluar = $key"; 
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