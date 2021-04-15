<?
	$id = $_GET["id"];
	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$sql = "select * from member where id='$id'";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="edit_ok.php">
		<table border="1" cellspacing="5" cellpadding="10">
			<tr>
				<th>아이디</th>
				<!-- <td><?=$row["id"]?></td> -->
				<td><input type="text" name="id" value="<?=$row['id']?>" readonly></td>
			</tr>
			<tr>
				<th>패스워드</th>
				<td><input type="text" name="pw"></td>
			</tr>
			<tr>
				<th>이름</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>주소</th>
				<td><input type="text" name="addr"></td>
			</tr>
			<tr>
				<th>전화번호</th>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<th>직업</th>
				<td><input type="text" name="job"></td>
			</tr>
			<tr>
				<th>최종학력</th>
				<td><input type="text" name="grade"></td>
			</tr>
			<tr>
				<th>성별</th>
				<td><input type="radio" name="gender" value="m" checked=""> 남성
					<input type="radio" name="gender" value="f"<?if($row["gender"] == 'f'){?> checked <?}?>> 여성
				</td>
			</tr>
			<tr><td colspan="2" align="center"> 
				<input type="button" value="완료" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<script type="text/javascript">
	function send() {
		document.frm1.submit();
	}

	function idcheck() {
		console.log(frm1.id.value);
		if(frm1.id.value=="") {
			alert("id를 입력하세요!!");
			frm1.id.focus();
			return false;
		}
		window.open("popup.php?id="+frm1.id.value,"pop01","width=500, height=200");
		
	}

</script>