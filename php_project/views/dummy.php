<?
	$conn = mysqli_connect("localhost","root","autoset","travel");
	$i = 1;
	$date = date("Y-m-d");
	while($i <=200) {
		mysqli_query($conn, "insert into qna(title, content, writer, writeDate) values('QnA 테스트$i', '테스트', 'admin','$date')");
		$i++;
	}
?>