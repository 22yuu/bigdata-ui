<?
	$no = $_GET['no'];
	$p_no = $_GET['p_no'];

	$conn = mysqli_connect("localhost","root","autoset","travel");
	$sql = "delete from qna_re where no=$no";
	mysqli_query($conn, $sql);
?>
<script type="text/javascript">
	alert("삭제가 완료되었습니다.");
</script>
<meta http-equiv="refresh" content="0;url=qna_content.php?no=<?=$p_no?>">