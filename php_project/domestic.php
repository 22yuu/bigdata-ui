<?
	session_start()
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
				<li ><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">DOMESTIC</a></li>
				<li><a href="oversea.php">OVERSEA</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				<li><a href="mypage.php">MYPAGE</a></li>		
				<li><a href="qna.php">QnA</a></li>
			</ul>
		<?
			}else {
		?>
			<ul class="menu">
				<li ><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">DOMESTIC</a></li>
				<li><a href="oversea.php">OVERSEA</a></li>
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
			<li><a href="#"><img src="res/images/slide/domestic/5.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/domestic/4.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/domestic/3.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/domestic/2.jpg"></a></li>
			<li><a href="#"><img src="res/images/slide/domestic/1.jpg"></a></li>
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
				<li><a href="#"><img src="res/images/prod_thum/domestic/domestic1.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/domestic/domestic2.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/domestic/domestic3.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/domestic/domestic4.jpg"></a></li>
				<li><a href="#"><img src="res/images/prod_thum/domestic/domestic5.jpg"></a></li>
			</ul>
		</div>
	</div>
</div>


<footer>
	푸터
</footer>
</body>
</html>