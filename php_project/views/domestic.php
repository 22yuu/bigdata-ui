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
				<li ><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">DOMESTIC</a></li>
				<li><a href="oversea.php">OVERSEAS</a></li>
				<li><a href="member/logout.php">LOGOUT</a></li>
				<li><a href="mypage/mypage.php">MYPAGE</a></li>		
				<li><a href="qna/qna.php">QnA</a></li>
			</ul>
		<?
			}else {
		?>
			<ul class="menu">
				<li ><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">DOMESTIC</a></li>
				<li><a href="oversea.php">OVERSEAS</a></li>
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
			<li><a href="#"><img src="../res/images/slide/domestic/5.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/domestic/4.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/domestic/3.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/domestic/2.jpg"></a></li>
			<li><a href="#"><img src="../res/images/slide/domestic/1.jpg"></a></li>
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
								<span class="tag_square dmt">
									<span>국내여행</span>
								</span>
							</span>
							<img src="../res/images/prod_thum/domestic/domestic1.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[3박4일 패키지]제주 중문롯데호텔 2박(항공+렌트3일)+서울 소공동 롯데호텔 1박
							</h5>
							<span class="list_price">
								<em>
									<strong>668,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square dmt">
									<span>국내여행</span>
								</span>
							</span>
							<img src="../res/images/prod_thum/domestic/domestic2.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[제주에어카텔/샹그릴라요트+카멜리아힐+승마투폰 제공] 항공+서귀포KAL+렌터카3일
							</h5>
							<span class="list_price">
								<em>
									<strong>266,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square dmt">
									<span>국내여행</span>
								</span>
							</span>
							<img src="../res/images/prod_thum/domestic/domestic3.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[제주에어카텔/ 제주 드라이브 코스추천!]항공+라마다프라자호텔+렌트카3일
							</h5>
							<span class="list_price">
								<em>
									<strong>297,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square dmt">
									<span>국내여행</span>
								</span>
							</span>
							<img src="../res/images/prod_thum/domestic/domestic4.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[제주에어카텔/세계유산축전] 항공+ 더 그랜드 섬오름+렌터카2박3일
							</h5>
							<span class="list_price">
								<em>
									<strong>264,000</strong>원~
								</em>
							</span>
						</div>					
					</a>
				</li>
				<li>
					<a href="#">
						<span class="thum_pic">
							<span class="tag">
								<span class="tag_square dmt">
									<span>국내여행</span>
								</span>
							</span>
							<img src="../res/images/prod_thum/domestic/domestic4.jpg">
						</span>
						<div class="pdt_list_info">
							<h5 class="tit_list_block">
								[제주에어카텔/세계유산축전] 항공+ 더 그랜드 섬오름+렌터카2박3일
							</h5>
							<span class="list_price">
								<em>
									<strong>264,000</strong>원~
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