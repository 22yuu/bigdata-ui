<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../res/css/common.css">
	<script type="text/javascript" src="../res/js/script.js"></script>
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
				<li ><a href="domestic.php">DOMESTIC</a></li>
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">OVERSEAS</a></li>
				<li><a href="member/logout.php">LOGOUT</a></li>
				<li><a href="mypage/mypage.php">MYPAGE</a></li>		
				<li><a href="qna/qna.php">QnA</a></li>
			</ul>
		<?
			}else {
		?>
			<ul class="menu">
				<li ><a href="domestic.php">DOMESTIC</a></li>
				<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">OVERSEAS</a></li>
				<li><a href="member/login.php">LOGIN</a></li>
				<li><a href="member/join.php">JOIN</a></li>		
				<li><a href="qna/qna.php">QnA</a></li>
			</ul>
		<?
		}
		?>
	</div>
</div>

<div id="imgSlider">
	<div class="imgs">
		<ul>
			<li><a href="#"><img src="../res/images/slide/oversea/5.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/oversea/4.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/oversea/3.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/oversea/2.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/oversea/1.jpg"></a></li>
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
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square ovs">
									<span>해외여행</span>
								</span>
							</span>
							<img src="/res/images/prod_thum/oversea/3.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[THE PLUS+] 숨은 비경 찾기, 꿈꾸던 프리미엄 여행 [와카야마3일]
							</h5>
							<span class="list_price">
								<em>
									<strong>2,299,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square ovs">
									<span>해외여행</span>
								</span>
							</span>
							<img src="/res/images/prod_thum/oversea/4.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[오키나와3일] 따스한 햇살 가득 오키나와 진정한 휴양을 꿈꾼다면 바로 이곳
							</h5>
							<span class="list_price">
								<em>
									<strong>999,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square ovs">
									<span>해외여행</span>
								</span>
							</span>
							<img src="/res/images/prod_thum/oversea/1.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[큐슈3일][전일 료칸온천+가이세키]우레시노 미인온천+숲속료칸
							</h5>
							<span class="list_price">
								<em>
									<strong>999,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square ovs">
									<span>해외여행</span>
								</span>
							</span>
							<img src="/res/images/prod_thum/oversea/2.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[오사카3일][Smart한 선택]온천체험포함/오사카,교토,고베+아라시야마
							</h5>
							<span class="list_price">
								<em>
									<strong>799,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>


<footer>
	푸터
</footer>
</body>
</html>