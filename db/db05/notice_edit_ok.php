<?
	session_start();
	$id = $_SESSION["id"];
	$no = $_POST["no"];
	$title = $_POST["notice-title"];
	$content = $_POST["notice-content"];
	$date = date("Y-m-d");//[h:i:s]

	$conn = mysqli_connect("localhost", "root", "autoset","mydb");
	$sql = "update notice set title = '$title', content = '$content' where no=$no";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=notice.php">