<? session_start() ?>
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
			<form name="frm1" method="POST" action="idpw_ok.php">
				<table class="table1">
					<tr>
						<th colspan="2" align="center">
							아이디/패스워드 찾기
						</th>
					</tr>
					<tr>
						<td>이름</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>전화번호</td>
						<td><input type="text" name="tel"></td>
					</tr>
					<tr>
						<td>아이디</td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="button" class="bt" value="아이디 찾기" onclick="searchid()">
							<input type="button" class="bt" value="비밀번호 찾기" onclick="searchpw()">
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
<script>

	function searchid() {
			if(frm1.name.value=="") {
				alert("이름을 입력하세요!!!");
				frm1.name.focus(); return false;
			}
			if(frm1.tel.value=="") {
				alert("전화번호를을 입력하세요");
				frm1.tel.focus(); return false;
			}
			document.frm1.submit();
	}

	function searchpw() {
			if(frm1.name.value=="") {
				alert("이름을 입력하세요!!!");
				frm1.name.focus(); return false;
			}
			if(frm1.tel.value=="") {
				alert("전화번호를을 입력하세요");
				frm1.tel.focus(); return false;
			}
			if(frm1.id.value=="") {
				alert("아이디를을 입력하세요");
				frm1.id.focus(); return false;
			}
			document.frm1.submit();
	}

</script>