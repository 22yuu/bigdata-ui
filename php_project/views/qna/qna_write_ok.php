<?
	session_start();
	$writer = $_SESSION["memberId"];
	$title = $_POST["qna-title"];
	$content = $_POST["qna-content"];
	$date = date("Y-m-d");
	
	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "insert into qna(title, content, writer,writeDate) values('$title', '$content','$writer', '$date')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=qna.php">