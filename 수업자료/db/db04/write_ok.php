<?
	$stdno = $_POST["stdno"];
	$name = $_POST["name"];
	$kor = $_POST["kor"];
	$eng = $_POST["eng"];
	$math = $_POST["math"];

	$conn = mysqli_connect("localhost", "root", "autoset","mydb");
	$sql = "insert into student values('$stdno', '$name', '$kor','$eng','$math')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">