  <?
  	session_start();
	$name= $_POST["username"];
	$memberId=$_POST["memberId"];
	$pw = $_POST["pw"];
	$phone = $_POST["phoneNum"];
	$email = $_POST["email"];
	$yyyy = $_POST["yyyy"];
	$mm = $_POST["mm"];
	$dd = $_POST["dd"];
	$prevPage = $_POST["prevPage"];


	$birthday = $yyyy.$mm.$dd;
	//echo $birthday;
	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "insert into member(name, memberId,pw, phone,email, bornDate) values('$name', '$memberId','$pw','$phone','$email','$birthday')";
	mysqli_query($conn, $sql);

	$_SESSION["memberId"] = $memberId;
?>
<meta http-equiv="refresh" content="0;url=<?=$prevPage?>">
<script type="text/javascript" charset="utf-8">
	alert("회원가입이 완료되었습니다.");
</script>