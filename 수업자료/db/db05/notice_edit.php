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
		<?
			$no = $_GET["no"];
			$conn = mysqli_connect("localhost","root","autoset","mydb");
			$sql = "select * from notice where no=$no";
			$rs = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($rs);
		?>

		<div class="content" >
			<h1 style="text-align: center"> <a href="notice.php">공지사항</a> </h1>
			<form name="frm1" method="post" action="notice_edit_ok.php">
			<table class="table1">

				<tr>
					<th>제목</th>
					<td><input type="text" name="notice-title" value="<?=$row["title"]?>" style="width:300px">
						<input type="hidden" name="no" value="<?=$no?>">
					</td>
				</tr>
				<tr>
					<th>내용</th>
					<td><textarea name="notice-content" style="width:300px; height: 200px;"><?=$row["content"]?></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="button" class="bt" value="수정하기" onclick="done()">
					</td>
				</tr>
			</table>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>
<script type="text/javascript">
	
	function done() {
			frm1.submit();
	}

</script>