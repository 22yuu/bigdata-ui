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
				<li><a href="notice.php">공지사항</a></li>
				<li><a href="board.php">자유게시판</a></li>
				<li><a href="qna.php">묻고답하기</a></li>
				<li><a href="inc.php">자료실</a></li>
				<li><a href="book.php">즐겨찾기</a></li>
			</ul>
		</div>
		<div class="content">
			<?
				$name = $_POST['name'];
				$tel = $_POST['tel'];
				$id = $_POST['id'];
				if($_POST["id"]) {
					// 비밀번호 찾기 버튼을 누른 경우
					$sql = "select pw as result from member where name='$name' and tel='$tel' and id='$id'";
				} else {
					// 아이디찾기 버튼을 누른 경우
					$sql = "select id as result from member where name='$name' and tel='$tel'";
				}
				$conn = mysqli_connect("localhost","root","autoset","mydb");
				$rs = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($rs);
			?>
			<table class="table1">
				<tr>
					<th>
						원하는 결과값은?
					</th>
				</tr>
				<tr>
					<td><?=$row["result"]?></td>
				</tr>
			</table>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>
<script>


</script>