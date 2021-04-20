<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="res/css/common.css">
	<script type="text/javascript" src="res/js/script.js"></script>
</head>
<body>

<div id="header">
	<div class="logo">
		<a href="index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<?
			if(isset($_SESSION["memberId"])) {
		?>
			<ul class="menu">
				<li ><a href="domestic.php">DOMESTIC</a></li>
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">OVERSEA</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				<li><a href="mypage.php">MYPAGE</a></li>		
				<li><a href="qna.php">QnA</a></li>
			</ul>
		<?
			}else {
		?>
			<ul class="menu">
				<li ><a href="domestic.php">DOMESTIC</a></li>
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">OVERSEA</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="join.php">JOIN</a></li>		
				<li><a href="qna.php">QnA</a></li>
			</ul>
		<?
		}
		?>
	</div>
</div>

<div id="imgSlider">
	<div class="imgs">
		<ul>
			<li><a href="#"><img src="res/images/slide/oversea/5.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/oversea/4.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/oversea/3.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/oversea/2.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/oversea/1.jpg"></a></li>
		</ul>
	</div>	
</div>
<div id="contents">
	<div class="recommand">
		<h1>추천 상품</h1>
	</div>
	<div id="recImgSlider">
		<div class="imgs">
			<ul>
				<li><a href="#"><img src="res/images/prod_thum/oversea/1.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/oversea/2.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/oversea/3.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/oversea/4.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/oversea/5.jpg"></a></li>
			</ul>
		</div>
	</div>
</div>


<footer>
	푸터
</footer>
</body>
</html>