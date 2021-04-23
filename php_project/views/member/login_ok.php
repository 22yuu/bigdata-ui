<?
	session_start();
	$memberId = $_POST["memberId"];
	$pw = $_POST["pw"];
	$prevPage = $_POST["prevPage"];

	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "select * from member where memberId ='$memberId'";
	$rs = mysqli_query($conn, $sql);
	$row= mysqli_fetch_array($rs);
	if($row["memberId"]) {
		$_SESSION["memberId"] = $row["memberId"];
		echo("<meta http-equiv='refresh' content='0;url=$prevPage'>");
	}else {?>
		<script charset="utf-8">
			alert("아이디와 패스워드가 올바르지 않습니다.");
			history.back();
		</script>
<?
	}
?>