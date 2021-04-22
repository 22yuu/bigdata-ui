<?
	session_start();
	$p_no = $_POST["no"];
	$content = $_POST["content"];
	$writer = $_SESSION["memberId"];
	$writeDate = date("Y-m-d");

	$conn = mysqli_connect("localhost", "root","autoset","travel");
	$sql = "insert into qna_re(content, writer, writeDate, p_no) values('$content','$writer','$writeDate','$p_no')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=qna_content.php?no=<?=$p_no?>">