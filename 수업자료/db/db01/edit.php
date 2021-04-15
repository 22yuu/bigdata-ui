<?
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from emergency where no=$no";
	$rs = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form name="frm1" method="post" action="edit_ok.php">
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<td>이름</td>			
				<td>
					<input type="hidden" name="no" value="<?=$row['no']?>">
					<input type="text" name="name" value="<?=$row['name']?>">
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type="text" name="tel" value="<?=$row['tel']?>"></td>
			</tr>
			<tr>
				<td>이메일</td>
				<td><input type="text" name="email" value="<?=$row['email']?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="전송" onclick="send()">
				</td>
			</tr>
		</table>	
	</form>
	
</body>
</html>
<script type="text/javascript">
	function send() {
		if(document.frm1.name.value =="") {
			alert("이름을 입력하세요.");
			frm1.name.focus();
			return false;
		}
		if(document.frm1.tel.value =="") {
			alert("전화번호를 입력하세요.");
			frm1.tel.focus();
			return false;
		}
		if(document.frm1.email.value =="") {
			alert("이메일을 입력하세요.");
			frm1.email.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>