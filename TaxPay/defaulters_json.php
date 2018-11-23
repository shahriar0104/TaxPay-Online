<?php
	
	require_once("./include/mysqli_connect.php");
	
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	$columns = array(
		0 => 'nid_no',
		1 => 'name', 
		2 => 'gender',
		3 => 'tax_region',
		4 => 'tax_circle',
		5 => 'phone'
	);

	$where_condition = $sqlTot = $sqlRec = "";

	if( !empty($params['search']['value']) ) {
		$where_condition .=	" WHERE ";
		$where_condition .= " ( nid_no LIKE '%".$params['search']['value']."%' ";
		$where_condition .= " OR name LIKE '%".$params['search']['value']."%' ";
		$where_condition .= " OR tax_region LIKE '%".$params['search']['value']."%' ";
		$where_condition .= " OR tax_circle LIKE '%".$params['search']['value']."%' ";     
		$where_condition .= " OR phone LIKE '%".$params['search']['value']."%' )";
	}

	$sql_query = " SELECT nid_no,name,gender,tax_region,tax_circle,phone FROM defaulters ";
	$sqlTot .= $sql_query;
	$sqlRec .= $sql_query;
	
	if(isset($where_condition) && $where_condition != '') {

		$sqlTot .= $where_condition;
		$sqlRec .= $where_condition;
	}

 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	$queryTot = mysqli_query($con, $sqlTot) or die("Database Error:". mysqli_error($con));

	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($con, $sqlRec) or die("Error to Get the Post details.");

	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
		"draw"            => intval( $params['draw'] ),   
		"recordsTotal"    => intval( $totalRecords ),  
		"recordsFiltered" => intval($totalRecords),
		"data"            => $data
	);

	echo json_encode($json_data);
?>
	