<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?
	$id = $_GET["id"];
	$conn = mysqli_connect("localhost", "root", "autoset","mydb");
	$sql = "select count(*) as cnt from member where id='$id'";

	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
	if($row["cnt"] == 1) {
?>

		<script type="text/javascript">
			alert("이미 존재하는 아이디입니다.");
			opener.document.frm1.id.value="";
			opener.document.frm1.id.focus();
			this.close();
		</script>
<?
	} else {
?>
		<script type="text/javascript">
			alert("사용가능한 아이디입니다.");
			opener.document.frm1.pw.focus();
			this.close();
		</script>
<?
	}
?>
</body>
</html>