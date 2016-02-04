<?php 
require 'dbinfo.php';

$page = $_POST['page']; 
$limit = $_POST['rows']; 
$sidx = $_POST['sidx']; 
$sord = $_POST['sord']; 

if(!$sidx) 
{
	$sidx =1;
} 
$query = "SELECT COUNT(*) AS count FROM registration1";
$result = mysqli_query($connection, $query); 
$row = mysqli_fetch_assoc($result); 

$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
    $total_pages = ceil($count/$limit); 
} else { 
    $total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$sql = "SELECT * FROM registration1 ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysqli_query($connection,$sql );

// $response->page = $page;
// $response->total = $total_pages;
// $response->records = $count;


$i=0;
while($row = mysqli_fetch_assoc($result)) {
	$response->rows[$i]['id'] = $row['id'];
	$response->rows[$i]['cell'] = array($row['id'],$row['fname']
								,$row['lname'],$row['mname']
								,$row['dob']
								,$row['emailid'],$row['employment']
								,$row['employer'],$row['options']
								,$row['maritalstatus'],$row['phonenumber']
								);
	$i++;
}
echo json_encode($response);
?>