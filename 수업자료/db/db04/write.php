<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="frm1" method="post" action="write_ok.php">
	<table border='1' cellspacing="5" cellpadding="10">
			<tr>
				<td>학번</td>
				<td><input type="text" name="stdno"></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>국어</td>
				<td><input type="text" name="kor"></td>
			</tr>
			<tr>
				<td>영어</td>
				<td><input type="text" name="eng"></td>
			</tr>
			<tr>
				<td>수학</td>
				<td><input type="text" name="math"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="추가" onclick="send()">
				</td>
			</tr>
	</table>
</form>
</body>
</html>

<script>
	function send() {
		if(frm1.stdno.value == "") {
			alert("학번을 입력해주세요!!!");
			frm1.stdno.focus();
		}else if(frm1.name.value == "") {
			alert("이름을 입력해주세요!!!");
		} else if(frm1.kor.value == "") {
			alert("국어 점수를 입력해주세요!!!");
		}else if(frm1.eng.value == "") {
			alert("영어 점수를 입력해주세요!!!");
		}else if(frm1.math.value == "") {
			alert("수학 점수를 입력해주세요!!!");
		} else {
			frm1.submit();
		}		
	}
</script>