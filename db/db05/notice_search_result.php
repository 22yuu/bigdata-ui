<?
	session_start();

	$content = $_GET["notice_search"];
	$str = $_POST["notice_search"];
	//$condition $_POST["selected"];

	if(isset($_GET["page"])){
		$page=$_GET["page"];
		$pageGroup = ceil($page / 5);
	} else {
		$page = 1;
		$pageGroup = 1;
	}

	$startRow=($page-1)*10;

	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$sql = "select * from notice where content like '%$str%'
	order by no desc limit $startRow, 10";//desc / asc
	$rs = mysqli_query($conn, $sql);

	$sql2 = "select count(*) as cnt from notice";
	$rs2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($rs2);

	$cnt = $row2["cnt"];
	$pageCount = ceil($cnt/10); // 올림, 반올림 round, 내림 floor
	$pageGroupCount = ceil($pageCount/5);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
			<div class="notice-search-wrap">
			<form name="frm_search" method="post" action="notice_search_result.php">
				<input type="text" name="notice_search">
				<input type="button" class="bt" name="btn-search" value="검색" onclick="search()">
			</form>
			</div>
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

					<tr><td colspan="5" align="center">
				<?


				
				//이전 5개로 돌아가기
				if($pageGroup > 1) {
					echo "<a href='notice.php?page=1'>첫 페이지로</a>";
					$prevPage=($pageGroup-2)*5+1;
					echo "<a href='notice.php?page=$prevPage'><</a>";
				}

				$startPage = ($pageGroup - 1)*5+1;
				$endPage = ($startPage+4);

					for($i=$startPage; $i<=$endPage; $i++) {
						// 페이지 카운트 범위를 벗어나면
						// 문장을 종료시킨다.
						if($i>$pageCount) {break;}
						if($page == $i) {
							echo "<a href='notice.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
						} else {
							echo "<a href='notice.php?page=$i'>[$i]</a>";
						}
						
					}
					//다음 5개 가져오는 루틴.
					$nextPage=$pageGroup*5+1;
					if($pageGroup<$pageGroupCount) {
						echo "<a href='notice.php?page=$nextPage'> ></a>";
						echo "<a href='notice.php?page=$pageCount'>마지막으로</a>";
					}
					
				?>
					</td><tr>

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
<script type="text/javascript">
	function search() {
		if( frm_search.notice_search.value == "") {
			alert("검색어를 입력해주세요!!!!");
			frm_search.notice_search.focus();
			return false;
		}
		document.frm_search.submit();
	}
</script>