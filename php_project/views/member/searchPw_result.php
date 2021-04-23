<?
	$memberId = $_POST["memberId"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];

	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "select pw from member where memberId='$memberId' and phone='$phone' and email='$email'";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
	$yourPwd = $row["pw"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/res/css/loginForm.css">
	
	<!-- js -->
	<script type="text/javascript" charset="utf-8" src="/res/js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="/index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<ul class="menu">
			<li ><a href="../domestic.php">DOMESTIC</a></li>
			<li><a href="../oversea.php">OVERSEA</a></li>
			<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="login.php">LOGIN</a></li>
			<li><a href="join.php">JOIN</a></li>		
			<li><a href="../qna/qna.php">QnA</a></li>
		</ul>
	</div>
</div>
<div id="loginForm">
	<div class="title">
		<a href="/index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">비밀번호 찾기</span>
	</div>

	<div>
		당신의 비밀번호는 : <?=$yourPwd?>
		<br><br><br>
		<a href="login.php">>로그인 페이지로...</a>
	</div>
</div> 
<footer></footer>
			
</div>
</body>
</html>