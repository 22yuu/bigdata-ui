<?
	session_start();
	$no = $_GET['no'];
	$conn = mysqli_connect("localhost","root","autoset","travel");
	$sql = "delete from member where no=$no";
	mysqli_query($conn, $sql);
	session_destroy();
?>
<script type="text/javascript">
	alert("회원 탈퇴가 완료되었습니다.");
</script>
<meta http-equiv="refresh" content="0;url=/project/index.php">