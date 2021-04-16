<?
	session_start();
	$id = $_SESSION["id"];
	$conn = mysqli_connect("localhost", "root", "autoset", "mydb");
	$sql = "delete from member where id='$id'";
	mysqli_query($conn, $sql);
	session_destroy();
?>
<meta http-equiv="refresh" content="0;url=index.php">