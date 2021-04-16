<?
	session_start();
	$id = $_SESSION["id"];
	$title = $_POST["notice-title"];
	$content = $_POST["notice-content"];
	$date = date("Y-m-d");//[h:i:s]

	$conn = mysqli_connect("localhost", "root", "autoset","mydb");
	$sql = "insert into notice(title, writer, writeday, content) values ('$title','$id', '$date', '$content')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=notice.php">