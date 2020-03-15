<?php
	session_start();
    include "../../lib/conn.php";
    mysqli_set_charset($conn,'utf8');

    $method = $_SERVER['REQUEST_METHOD'];


    $key = isset($_REQUEST['idKas']) ? $_REQUEST['idKas'] : '';
    
		$no_rumah= isset($_REQUEST['no_rumah']) ? $_REQUEST['no_rumah'] : '' ;
		$januari= isset($_REQUEST['januari']) ? $_REQUEST['januari'] : '' ;
		$februari= isset($_REQUEST['februari']) ? $_REQUEST['februari'] : '' ;
		$maret= isset($_REQUEST['maret']) ? $_REQUEST['maret'] : '' ;
		$april= isset($_REQUEST['april']) ? $_REQUEST['april'] : '' ;
		$mei= isset($_REQUEST['mei']) ? $_REQUEST['mei'] : '' ;
		$juni= isset($_REQUEST['juni']) ? $_REQUEST['juni'] : '' ;
		$juli= isset($_REQUEST['juli']) ? $_REQUEST['juli'] : '' ;
		$agustus= isset($_REQUEST['agustus']) ? $_REQUEST['agustus'] : '' ;
		$september= isset($_REQUEST['september']) ? $_REQUEST['september'] : '' ;
		$oktober= isset($_REQUEST['oktober']) ? $_REQUEST['oktober'] : '' ;
		$november= isset($_REQUEST['november']) ? $_REQUEST['november'] : '' ;
		$desember= isset($_REQUEST['desember']) ? $_REQUEST['desember'] : '' ;
		$tahun= isset($_REQUEST['tahun']) ? $_REQUEST['tahun'] : '' ;
		$total= isset($_REQUEST['total']) ? $_REQUEST['total'] : '' ;
		$modtime= isset($_REQUEST['modtime']) ? $_REQUEST['modtime'] : '' ;
    switch ($method) {
        case 'GET':
          $sql = "SELECT * FROM report ".($key ?" WHERE idKas =$key":''); 
        break;
        case 'PUT': $sql = "UPDATE report SET 
										no_rumah= '$no_rumah', 
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
										tahun= '$tahun', 
										total= '$total', 
										modtime= '$modtime' WHERE idKas = $key ";
        break;
        case 'POST': $sql = "INSERT INTO report( 
										no_rumah, 
										januari, 
										februari, 
										maret, 
										april, 
										mei, 
										juni, 
										juli, 
										agustus, 
										september, 
										oktober, 
										november, 
										desember, 
										tahun, 
										total, 
										modtime) VALUES (
										'$no_rumah', 
										'$januari', 
										'$februari', 
										'$maret', 
										'$april', 
										'$mei', 
										'$juni', 
										'$juli', 
										'$agustus', 
										'$september', 
										'$oktober', 
										'$november', 
										'$desember', 
										'$tahun', 
										'$total', 
										'$modtime')";
        break;
        case 'DELETE':
           $sql = "DELETE FROM report WHERE idKas = $key"; 
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