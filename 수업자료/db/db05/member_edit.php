<?
	session_start();
	$id = $_SESSION["id"];
	$conn = mysqli_connect("localhost", "root", "autoset", "mydb");
	$sql = "select * from member where id='$id'";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="topmenu">
		<?if(isset($_SESSION["id"])){?>
				<a href="logout.php">LogOut</a>
				|
				<a href="member_edit.php">Edit</a>
				| 
				<a href="idpw.php">Delete account</a>
			 	&nbsp;&nbsp;
			<?} else {?>
			<a href="login.php">Login</a>
			 |
			 <a href="member.php">SignUp</a>
			  | 
			 <a href="idpw.php">Search Id/Pw</a>
			 &nbsp;&nbsp;
			<?}?>
		</div>
		<br><a href="index.php">Welcome!!</a>
	</header>

	<div id="wrap">
		<div class="menu">
			<ul class="menubar">
				<li>첫번째 메뉴</li>
				<li>두번째 메뉴</li>
				<li>세번째 메뉴</li>
				<li>네번째 메뉴</li>
				<li>다섯번째 메뉴</li>
			</ul>
		</div>
		<div class="content">
			<form name="frm1" method="post" action="member_edit_ok.php">
			<table class="table1">
				<tr>
					<th colspan="2" align="center">
						회원수정
					</th>
				</tr>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="id" value="<?=$row['id']?>" readonly></td>
				</tr>
				<tr>
					<td>패스워드</td>
					<td><input type="password" name="pw" value="<?=$row['pw']?>"></td>
				</tr>
				<tr>
					<td>이름</td>
					<td><input type="text" name="name" value="<?=$row['name']?>"></td>
				</tr>
				<tr>
					<td>주소</td>
					<td><input type="text" name="addr" value="<?=$row['addr']?>"></td>
				</tr>
				<tr>
					<td>전화번호</td>
					<td><input type="text" name="tel" value="<?=$row['tel']?>"></td>
				</tr>
				<tr>
					<td>직업</td>
					<td><input type="text" name="job" value="<?=$row['job']?>"></td>
				</tr>
				<tr>
					<td>최종학력</td>
					<td><input type="text" name="grade" value="<?=$row['grade']?>"></td>
				</tr>
				<tr>
					<td>성별</td>
					<td><input type="radio" name="gender" value="m" checked> 남성
						<input type="radio" name="gender" value="f"<?if($row["gender"] == 'f'){?> checked <?}?>> 여성
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="button" value="회원수정 완료" onclick="send()">
					</td>
				</tr>
			</table>
		</form>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>
<script type="text/javascript">
	function send() {
		document.frm1.submit();
	}
</script>