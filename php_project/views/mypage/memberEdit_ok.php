<?
	session_start();

	$pw = $_POST["pw"];
	$phone = $_POST["phoneNum"];
	$email = $_POST["email"];
	$yyyy = $_POST["yyyy"];
	$mm = $_POST["mm"];
	$dd = $_POST["dd"];
	$prevPage = $_POST["prevPage"];

	$bornDate = $yyyy.$mm.$dd;

	$conn = mysqli_connect("localhost","root","autoset","travel");
	$sql = "update member set(pw='$pw',phone='$phone',email='$email', bornDate='$bornDate')";
	mysqli_query($conn, $sql);
?>
<script type="text/javascript">
	alert("회원수정이 완료되었습니다!!!");
</script>
<meta http-equiv="refresh" content="0;url=/project/mypage/mypage.php">