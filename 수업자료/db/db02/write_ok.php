<?
	$name = $_POST["name"];
	$juso = $_POST["juso"];
	$tel = $_POST["tel"];
	$age = $_POST["age"];
	$job = $_POST["job"];
	$income = $_POST["income"];
	$car = $_POST["car"];
	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$sql = "insert into member values ('$name','$juso','$tel','$age','$job','$income','$car')";
	mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">