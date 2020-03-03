<?php
$url = "localhost";
$database="naresh";
$username="root";
$password="";

$conn = mysqli_connect($url, $username, $password, $database);
if(!$conn)
{
	die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT * from game";
$result = mysqli_query($conn, $sql);
$rows = array();
if(mysqli_num_rows($result)>0){
	while($r = mysqli_fetch_assoc($result)){
		array_push($rows, $r);
	}
	print json_encode($rows);
}
//else {
//	echo "No data";
//}
mysqli_close($conn);
	
?>
