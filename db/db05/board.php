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
				<a href="javascript:dcount()">Delete account</a>
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
			자유게시판......
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>
<script type="text/javascript">
	function dcount() {
		if(confirm("정말로 회원탈퇴를 하시겠습니까?")) {
			location.href="dcount.php";
		}
	}
</script>