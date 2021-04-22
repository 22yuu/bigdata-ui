<?session_start()?>
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
	<div class="content" style="text-align: center">
			<h1> QnA </h1>
			<form name="frm1" method="post" action="qna_write_ok.php">
			<table class="table1">
				<tr>
					<th>제목</th>
					<td><input type="text" name="qna-title" style="width:300px"></td>
				</tr>
				<tr>
					<th>내용</th>
					<td><textarea name="qna-content" style="width:300px; height: 200px;"></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="button" class="bt" value="작성 완료" onclick="done()">
					</td>
				</tr>
			</table>
		</div>
</div>
<footer></footer>

</body>
</html>
<script type="text/javascript">
	
	function done() {
		frm1.submit();
	}
</script>