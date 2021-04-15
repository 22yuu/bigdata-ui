<?
	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$sql = "select * from student";
	$rs = mysqli_query($conn, $sql);
	
	$tot_sql = "select "
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="5" cellpadding="10">
		<tr>
			<th>학번</th>
			<th>이름</th>
			<th>국어</th>
			<th>영어</th>
			<th>수학</th>
			<th>총점</th>
			<th>평균</th>
		</tr>
		<?
			while($row = mysqli_fetch_array($rs)) {
				$tot = $row["kor"] + $row["eng"] + $row["math"];
				$avg = $tot / 3;
		?>
		<tr>
			<td><?=$row["stdno"]?></td>
			<td><?=$row["name"]?></td>
			<td><?=$row["kor"]?></td>
			<td><?=$row["eng"]?></td>
			<td><?=$row["math"]?></td>
			<td><?=$tot?></td>
			<td><?=$avg?></td>
		</tr>
		<?
			}
		?>
		<tr>
			<td colspan="7" align="center"> <input type="button" value="추가하기" onclick="location.href='write.php'"></td>
		</tr>
	</table>
</body>
</html>