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
	<form name="frm1">
		<table border="1" cellspacing="5" cellpadding="10">
			<tr>
				<th>아이디</th>
				<td><?=$row["id"]?></td>
			</tr>
			<tr>
				<th>이름</th>
				<td><?=$row["name"]?></td>
			</tr>
			<tr>
				<th>주소</th>
				<td><?=$row["addr"]?></td>
			</tr>
			<tr>
				<th>전화번호</th>
				<td><?=$row["tel"]?></td>
			</tr>
			<tr>
				<th>직업</th>
				<td><?=$row["job"]?></td>
			</tr>
			<tr>
				<th>최종학력</th>
				<td><?=$row["grade"]?></td>
			</tr>
			<tr>
				<th>성별</th>
				<td><?=$row["gender"]?></td>
			</tr>
			<tr><td colspan="2" align="center"> 
				<input type="button" value="수정" onclick="location.href='edit.php?id=<?=$id?>'">
				<input type="button" value="삭제" onclick="del()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<script type="text/javascript">
	function del() {

	}

</script>