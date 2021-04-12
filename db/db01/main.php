<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- 서버사이드 백엔드 언어가 구동되어야 함. -->
        <?
            //php언어는 변수명 앞에 $를 붙여준다.
            //db에 접속하기 위한 mysqli_connect라는 함수를 실행
            //그 결과값을 토큰으로 $conn에 넣어준다.
            //db 접속하는 문법.
            $conn=mysqli_connect("localhost","root","autoset","mydb");
            $sql="select * from emergency";
            //원격에서 sql문장을 실행시키는 함수 mysqli_query
            //결과값을 $rs라는 배열변수에 담아준다.
            $rs = mysqli_query($conn,$sql);
            //mysql_fetch_array($rs); // 커서를 한칸씩 이동
        ?>  

        <table border="1" cellspacing="5" cellpadding="10">
            <tr>
                <th>이름</th>
                <th>전화번호</th>
                <th>이메일주소</th>
            </tr>
            <? 
                while($row=mysqli_fetch_array($rs)){
            ?>
            <tr>
                <td>
                    <a href="content.php?no=<?=$row["no"]?>">
                    <?=$row["name"]?>
                    </a>
                </td>
                <td><?=$row["tel"]?></td>
                <td><?=$row["email"]?></td>
            </tr>
            <? 
                }
            ?>
            <tr>
                <td colspan="3" align="center">
                    <input type="button" value="추가하기" onclick="location.href='write.php'">
                </td>
            </tr>

        </table>
    </body>
</html>