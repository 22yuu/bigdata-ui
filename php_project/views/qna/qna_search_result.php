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
	
	$selected = $_GET['selected'];
	$str = $_GET['searchString'];

	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "select * from qna where $selected like '%$str%' order by no desc limit $startRow, 10";
	$rs = mysqli_query($conn, $sql);

	$sql2 = "select count(*) as cnt from qna where $selected like '%$str%'";
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
	<link rel="stylesheet" type="text/css" href="/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/res/css/qna.css">
	
	<!-- js -->
	<script type="text/javascript" src="/res/js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="/index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<?
			if(isset($_SESSION["memberId"])) {
		?>
			<ul class="menu">
				<li><a href="../domestic.php">DOMESTIC</a></li>
				<li><a href="../oversea.php">OVERSEA</a></li>
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
				<option value="title">??????</option>
				<option value="content">??????</option>
				<option value="writer">?????????</option>
			</select>
			<input type="text" name="searchString">
			<input type="button" class="bt" name="btn-search" value="??????" onclick="search()">
		</form>
	</div>

	<table class="table1" style="width:600px">
		<tr>
			<th>no</th>
			<th>??????</th>
			<th>?????????</th>
			<th>??????</th>
			<th>?????????</th>
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


		
		//?????? 5?????? ????????????
		if($pageGroup > 1) {
			echo "<a href='qna_search_result.php?page=1&selected=$selected&searchString=$str'>??? ????????????</a>";
			$prevPage=($pageGroup-2)*5+1;
			echo "<a href='qna_search_result.php?page=$prevPage&selected=$selected&searchString=$str'><</a>";
		}

		$startPage = ($pageGroup - 1)*5+1;
		$endPage = ($startPage+4);

			for($i=$startPage; $i<=$endPage; $i++) {
				// ????????? ????????? ????????? ????????????
				// ????????? ???????????????.
				if($i>$pageCount) {break;}
				if($page == $i) {
					echo "<a href='#'><font color='red'><b>[$i]</b></font></a>";
				} else {
					echo "<a href='qna_search_result.php?page=$i&selected=$selected&searchString=$str'>[$i]</a>";
				}
				
			}
			//?????? 5??? ???????????? ??????.
			$nextPage=$pageGroup*5+1;
			if($pageGroup<$pageGroupCount) {
				echo "<a href='qna_search_result.php?page=$nextPage&selected=$selected&searchString=$str'> ></a>";
				echo "<a href='qna_search_result.php?page=$pageCount&selected=$selected&searchString=$str'>???????????????</a>";
			}
			
		?>
			</td><tr>
		<tr>
			<td colspan="5" align="center"><input type="button" class="bt" value="?????????" onclick="loginCheck()"></td>
		</tr>
	</table>

	
</div>
<footer></footer>

</body>
</html>
<script type="text/javascript" charset="utf-8">
	
	function search() {
		if(frm_search.searchString.value=='') {
			alert("???????????? ??????????????????!!");
			frm_search.searchString.focus();
			return false;
		}
		frm_search.submit();
	}
</script>