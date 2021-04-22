<?
	header('Content-Type: application/json');
	$memberId["memeberId"] = $_POST["memberId"];
	echo "{\"memberId\":\"$memberId\"}";

	$conn = mysqli_connect("localhost","root","autoset","travel");
	//$sql = "select count(*) as cnt from member where memberId = $memberId";
	$sql = "select memberId from member where memberId = $memberId";
	$rs = mysqli_query($conn, $sql);
	// if($row = mysqli_fetch_array($rs)) {
	// 	echo json_encode($row["memberId"]);
	// } else {
	// 	echo json_encode($row["memberId"]);
	// }
	die();
?>