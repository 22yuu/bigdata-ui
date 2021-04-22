<?
	session_start();

	if(isset($_GET["page"])) {
		$page = $_GET["page"];
		$pageGroup = ceil($page / 5);
	} else {
		$page = 1;
		$pageGroup = 1;
	}

	$startRow = ($page-1)*10;

	$session_value = (isset($_SESSION["memberId"]))?$_SESSION["memberId"]:'';
	
	$conn = mysqli_connect("localhost","root","autoset","travel");
	$sql = "select * from qna order by no desc limit $startRow, 10";
	$rs = mysqli_query($conn, $sql);

	$sql2 = "select count(*) as cnt from qna";
	$rs2 = mysqli_query($conn, $sql2);
	$row = mysqli_fetch_array($rs2);

	$cnt = $row['cnt'];
	$pageCount = ceil($cnt/10);
	$pageGroupCount = ceil($pageCount/5);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/project/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/project/res/css/qna.css">
	
	<!-- js -->
	<script type="text/javascript" src="/project/res/js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="/project/index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<?
			if(isset($_SESSION["memberId"])) {
		?>
			<ul class="menu">
				<li><a href="../domestic.php">DOMESTIC</a></li>
				<li><a href="../oversea.php">OVERSEAS</a></li>
				<li><a href="../member/logout.php">LOGOUT</a></li>
				<li><a href="../mypage/mypage.php">MYPAGE</a></li>
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">QnA</a></li>
			</ul>
		<?
			}else {
		?>
			<ul class="menu">
				<li ><a href="../domestic.php">DOMESTIC</a></li>
				<li><a href="../oversea.php">OVERSEA</a></li>
				<li><a href="../member/login.php">LOGIN</a></li>
				<li><a href="../member/join.php">JOIN</a></li>		
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">QnA</a></li>
			</ul>
		<?
		}
		?>
	</div>
</div>
<div id="form">
	<div class="title">
		<a href="/index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">Q n A</span>
	</div>

	<div class="qna-search-wrap">
		<form name="frm_search" method="get" action="qna_search_result.php">
			<select name="selected">
				<option value="title">제목</option>
				<option value="content">내용</option>
				<option value="writer">작성자</option>
			</select>
			<input type="text" name="searchString">
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
			<? if (isset($_SESSION["memberId"])) { ?>
				<td><a href="qna_content.php?no=<?=$no?>"><?=$row["title"]?></a></td>
			<script> console.log(<?=$no?>);</script>
			<?
			} else {
			?>
			<td><a href="#" onclick="loginCheck()"><?=$row["title"]?></a></td>
			<?
			}
			?>
			<td><?=$row["writer"]?></td>
			<td><?=$row["writeDate"]?></td>
			<td><?=$row["hit"]?></td>
		</tr>
		<?
}
		?>

			<tr><td colspan="5" align="center">
		<?


		
		//이전 5개로 돌아가기
		if($pageGroup > 1) {
			echo "<a href='qna.php?page=1'>첫 페이지로</a>";
			$prevPage=($pageGroup-2)*5+1;
			echo "<a href='qna.php?page=$prevPage'><</a>";
		}

		$startPage = ($pageGroup - 1)*5+1;
		$endPage = ($startPage+4);

			for($i=$startPage; $i<=$endPage; $i++) {
				// 페이지 카운트 범위를 벗어나면
				// 문장을 종료시킨다.
				if($i>$pageCount) {break;}
				if($page == $i) {
					echo "<a href='qna.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
				} else {
					echo "<a href='qna.php?page=$i'>[$i]</a>";
				}
				
			}
			//다음 5개 가져오는 루틴.
			$nextPage=$pageGroup*5+1;
			if($pageGroup<$pageGroupCount) {
				echo "<a href='qna.php?page=$nextPage'> ></a>";
				echo "<a href='qna.php?page=$pageCount'>마지막으로</a>";
			}
			
		?>
			</td><tr>
		<tr>
			<td colspan="5" align="center"><input type="button" class="bt" value="글쓰기" onclick="loginCheck()"></td>
		</tr>
	</table>

	
</div>
<footer></footer>

</body>
</html>
<script type="text/javascript">
	
	function loginCheck() {
		var session='<? echo $session_value ?>';

		if(session == '') {
			if(confirm('로그인이 필요합니다. 로그인을 하시겠습니까??')) {
				location.href='../member/login.php';
			}
		} else {
			location.href="qna_write.php";
		}
	}

	function search() {
		if(frm_search.searchString.value=='') {
			alert("검색어를 입력해주세요!!");
			frm_search.searchString.focus();
			return false;
		}
		frm_search.submit();
	}
</script>