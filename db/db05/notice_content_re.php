<?
	session_start();
	$p_no = $_POST["no"];
	$content = $_POST["content"];
	$writer = $_SESSION["id"];
	$writeday = date("Y-m-d");

	echo $p_no;
	$conn = mysqli_connect("localhost", "root","autoset","mydb");
	$sql = "insert into notice_re(content, writer, writeday, p_no) values('$content','$writer','$writeday','$p_no')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=notice_content.php?no=<?=$p_no?>">