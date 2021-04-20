  <?
	$name= $_POST["username"];
	$memberId=$_POST["memberId"];
	$pw = $_POST["pw"];
	$phone = $_POST["phoneNum"];
	$yyyy = $_POST["yyyy"];
	$mm = $_POST["mm"];
	$dd = $_POST["dd"];


	$birthday = $yyyy.$mm.$dd;
	//echo $birthday;
	$conn = mysqli_connect("localhost","root","autoset","travel");
	$sql = "insert into member(name, memberId,pw, phone, bornDate) values('$name', '$memberId','$pw','$phone','$birthday')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=index.php">