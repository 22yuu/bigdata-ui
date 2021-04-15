<?
	 session_start();
	 $no = $_GET["no"];
	 $conn = mysqli_connect("localhost","root","autoset","mydb");

	 $update_hit_sql = "update notice set hit = hit+1 where no=$no";
	 mysqli_query($conn, $update_hit_sql);

	 $sql = "select * from notice where no =$no";
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
			<h1 style="text-align: center"> <a href="notice.php">공지사항</a> </h1>
			<table style="width:600px">
				<tr>
					<td>
						<font style="font-size:1.5em; color:gray;"><?=$row["no"]?></font>
						&nbsp;&nbsp;
						<font style="font-size: 2.0em; color:#222;"><?=$row["title"]?></font>
						<br><br>
						<font style="font-size:1.2em; color:gray;">by <b><?=$row["writer"]?></b></font>
						&nbsp;&nbsp;
						<font style="font-size:0.9em; color:#ddd;"><?=$row["writeday"]?></font>
						&nbsp;&nbsp;
						<font style="font-size:0.9em; color:#ddd;">조회수 <?=$row["hit"]?></font>
					</td>
				</tr>
				<tr>
					<td>
						<div style="width:100%;height:1px;margin:20px 0;background-color:#cccccc;"></div>
					</td>
				</tr>
				<tr>
					<br>
					<td>
						<?=$row["content"]?>
					</td>
					<br>
				</tr>
			</table>
			<?
				if($_SESSION["id"] == 'admin') {?>
					
					<div class="table-footer">
						<input type="button" name="edit" class="bt" value="수정" onclick="edit()">
						<input type="button" name="delete" class="bt" value="삭제" onclick="del()">
						<input type="button" name="go-notice-list" class="bt" value="목록" onclick="location.href='notice.php'">
					</div>
			<?
			} else {
			?>
			<div class="table-footer">
				<input type="button" name="go-notice-list" class="bt" value="목록" onclick="location.href='notice.php'">
			</div>
			<?
			}
			?>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>
<script type="text/javascript">
	function del() {
		if(confirm("정말로 삭제하시겠습니까?")) {
			location.href="delete_ok.php?no='<?=$row["no"]?>'";
		}
	}
	function edit() {
		location.href="notice_edit.php?no='<?=$row["no"]?>'";
	}

</script>