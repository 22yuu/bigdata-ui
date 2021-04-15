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
				<a href="dcount.php">Delete account</a>
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
			<li><a href="notice.php">공지사항</a></li>
				<li><a href="board.php">자유게시판</a></li>
				<li><a href="qna.php">묻고답하기</a></li>
				<li><a href="inc.php">자료실</a></li>
				<li><a href="book.php">즐겨찾기</a></li>
			</ul>
		</div>
		<div class="content">
			<form name="frm1" method="post" action="login_ok.php">
				<table class="table1">
					<tr>
						<th colspan="2" align="center">
							Login
						</th>
					</tr>
					<tr>
						<td>아이디:</td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
						<td>패스워드</td>
						<td><input type="password" name="pw"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"> 
							<input type="button" class="bt" value="submit" onclick="send()">&nbsp;&nbsp;
							<input type="reset" class="bt" value="reset"> 
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
		if(frm1.id.value=="") {
			alert("아이디를 입력해주세요!!");
			frm1.id.focus();
			return false;
		}
		if(frm1.pw.value=="") {
			alert("패스워드를 입력해주세요!!");
			frm1.pw.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>