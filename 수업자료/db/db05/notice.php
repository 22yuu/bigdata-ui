<?
	 session_start();
	 $conn = mysqli_connect("localhost","root","autoset","mydb");
	 $sql = "select * from notice order by no desc";//desc / asc
	 $rs = mysqli_query($conn, $sql);
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
		<div class="content" >
			<h1 style="text-align: center"> <a href="notice.php">공지사항</a> </h1>
			<table class="table1" style="width:600px">
				<tr>
					<th>no</th>
					<th>제목</th>
					<th>작성자</th>
					<th>날짜</th>
					<th>조회수</th>
				</tr>
				<?
					while($row = mysqli_fetch_array($rs)) {
					$no = $row["no"];
				?>
				<tr>
					<td><?=$no?></td>
					<? if (isset($_SESSION["id"])) { ?>
					<td><a href="notice_content.php?no=<?=$no?>"><?=$row["title"]?></a></td>
					<script> console.log(<?=$no?>);</script>
					<?
					} else {
					?>
					<td><?=$row["title"]?></td>
					<?
					}
					?>

					<td><?=$row["writer"]?></td>
					<td><?=$row["writeday"]?></td>
					<td><?=$row["hit"]?></td>
				</tr>
				<?
}
				?>

				<?
					//로그인 했니?
					if(isset($_SESSION["id"])) {
						// 관리자 이니?
						if($_SESSION["id"] == "admin") { 
				?>
							<tr>
								<td colspan="5" align="center"><input type="button" class="bt" value="공지사항 추가" onclick="location.href='notice_write.php'"></td>
							</tr>
				<?
					}
				?>

				<?
				}
				?>
			</table>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>