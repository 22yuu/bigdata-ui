<?
	$prevPage = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/project/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/project/res/css/loginForm.css">
	
	<!-- js -->
	<script type="text/javascript" src="/project/res/js/script.js"></script>

	<script>
		function login_check() {
			if(searchId_form.username.value == "") {
				alert("이름을 입력해주세요...!");
				searchId_form.username.focus();
				return false;
			} else if (searchId_form.phone.value =="") {
				alert("휴대폰번호를 입력해주세요...!");
				searchId_form.phone.focus();
				return false;
			}else if (searchId_form.email.value =="") {
				alert("이메일을 입력해주세요...!");
				searchId_form.email.focus();
				return false;
			}

			document.searchId_form.submit();
		}
	</script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="/project/index.php">TRAVEL</a>
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
		<a href="/project/index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">아이디 찾기</span>
	</div>

	<form action="serachId_result.php" method="post" name="searchId_form"> <!-- 로그인하는 것은 Select 하는 것 -->

	  <div class="form-group">
	    <input type="text" name="username" class="form-control" placeholder="이름을 입력해주세요." id="username">
	  </div>
	  <div class="form-group">
	    <input type="text" name="phone" class="form-control" maxlength="11" placeholder="휴대폰번호를 입력해주세요." id="phone">
	  </div>
	  
	  <div class="form-group">
	    <input type="text" name="email" class="form-control" placeholder="이메일을 입력해주세요." id="pw">
	  </div>
	  	<div class="form-group">
	  		<input type="button" class="btn btn-primary" onclick="login_check()" value="아이디찾기">
		  	<!-- <button id="btn-login" class="btn btn-primary" onclick="login_check()">로그인</button> -->
		</div>
	</form>
</div> 
<footer></footer>
			
</div>
</body>
</html>