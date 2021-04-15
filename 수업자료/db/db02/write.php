<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
                <th>이름</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            	<th>주소</th>
            	<td><input type="text" name="juso"></td>
            </tr>
            <tr>
            	<th>전화번호</th>
            	<td><input type="text" name="tel"></td>
            </tr>
            <tr>
				<th>나이</th>
				<td><input type="text" name="age"></td>
            </tr>
            <tr>
            	<th>직업</th>
            	<td><input type="text" name="job"></td>
            </tr>
            <tr>
				<th>연봉</th>
				<td><input type="text" name="income"></td>
            </tr>
            <tr>
				<th>보유차종</th>
				<td><input type="text" name="car"></td>
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
		if(document.frm1.juso.value =="") {
			alert("주소를 입력하세요.");
			frm1.juso.focus();
			return false;
		}
		if(document.frm1.age.value =="") {
			alert("나이를 입력하세요.");
			frm1.age.focus();
			return false;
		}
		if(document.frm1.job.value =="") {
			alert("직업을 입력하세요.");
			frm1.job.focus();
			return false;
		}
		if(document.frm1.income.value =="") {
			alert("연봉을 입력하세요.");
			frm1.income.focus();
			return false;
		}
		if(document.frm1.car.value =="") {
			alert("보유차종을 입력하세요.");
			frm1.car.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>