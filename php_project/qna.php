<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="res/css/common.css">
	<link rel="stylesheet" type="text/css" href="res/css/qna.css">
	
	<!-- js -->
	<script type="text/javascript" src="res/js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<ul class="menu">
			<li ><a href="domestic.php">DOMESTIC</a></li>
			<li><a href="oversea.php">OVERSEA</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="join.php">JOIN</a></li>		
			<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">QnA</a></li>
		</ul>
	</div>
</div>
<div id="form">
	<div class="title">
		<a href="index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">Q n A</span>
	</div>

	<div class="notice-search-wrap">
		<form name="frm_search" method="post" action="notice_search_result.php">
			<select name="selected">
				<option value="title">제목</option>
				<option value="content">내용</option>
				<option value="writer">작성자</option>
			</select>
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
		<!-- <?
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
		?> -->
	</table>

	
</div>
<footer></footer>

</body>
</html>