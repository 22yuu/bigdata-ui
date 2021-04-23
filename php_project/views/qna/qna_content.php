<?
	session_start();
	$no = $_GET["no"];
	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	
	$update_hit_sql = "update qna set hit = hit+1 where no=$no";
 	mysqli_query($conn, $update_hit_sql);

	$sql = "select * from qna where no=$no";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
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
	<div class="content">
			<h1 style="text-align: center"> <a href="qna.php">QnA</a> </h1>
			<table style="width:720px">
				<tr>
					<td>
						<font style="font-size: 2.0em; color:#222; text-align: left;"><?=$row["title"]?></font>
						<br><br>
						<font style="font-size:1.2em; color:gray;">by <b><?=$row["writer"]?></b></font>
						&nbsp;&nbsp;
						<font style="font-size:0.9em; color:#ddd;"><?=$row["writeDate"]?></font>
						&nbsp;&nbsp;
						<font style="font-size:0.9em; color:#ddd;">조회수 <?=$row["hit"]?></font>
					</td>
				</tr>
				<tr>
					<td>
						<div style="width:100%;height:1px;margin:20px 0;background-color:#cccccc;"></div>
					</td>
				</tr>
				<tr>
					<br>
					<td style="height:150px;">
						<?=$row["content"]?>
					</td>
					<br>
				</tr>
			</table>
			
			<?
				if($_SESSION["memberId"] == $row["writer"]) {?>
					
					<div class="table-footer">
						<input type="button" name="edit" class="bt" value="수정" onclick="edit()">
						<input type="button" name="delete" class="bt" value="삭제" onclick="del()">
						<input type="button" name="go-qna-list" class="bt" value="목록" onclick="location.href='qna.php'">
					</div>
			<?
			} else {
			?>
			<div class="table-footer">
				<input type="button" name="go-qna-list" class="bt" value="목록" onclick="location.href='qna.php'">
			</div>
			<?
			}
			?>
			<div class="reply">
				<form name="frm1" method="post" action="qna_content_re.php">
				<table class="table1" style="width:300px; margin:0 auto">
					<tr>
						<td>
							<input type="hidden" name="no" value="<?=$no?>">
							<textarea name="content" rows="2" cols="80"></textarea>
						</td>
						<td style="padding:5px">
							<input type="button" value="답변하기" class="bt" onclick="send()">
						</td>
					</tr>
					<?
						$sql2 = "select * from qna_re where p_no=$no";
						$rs2 = mysqli_query($conn, $sql2);
						while ($row2 = mysqli_fetch_array($rs2)) {
					?>
						<tr>
							<td colspan="2">
								<?=nl2br($row2["content"])." / ".$row2["writeDate"]." by ".$row2["writer"]?>
								<? if(isset($_SESSION["memberId"])){  //현재 로그인 상태? 
									if($_SESSION["memberId"] == $row2["writer"]){
								?>
									<a href="qna_content_re_del.php?no=<?=$row2["no"]?>&p_no=<?=$no?>">x</a>
								<?
									}
								}
								?>
							</td>
						</tr>
					<?		
						}
					?>
					
					<??>
					</table>
				</form>
			</div>
	</div>
</div>
<footer></footer>

</body>
</html>
<script type="text/javascript" charset="utf-8">
	function send() {
		if(frm1.content.value=="") {
			alert("내용을 입력하세요!!!");
			frm1.content.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>