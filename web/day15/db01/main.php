<<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- 서버사이드 백엔드 언어가 구동되어야 함. -->
        <?php
            //php언어는 변수명 앞에 $를 붙여준다.
            //db에 접속하기 위한 mysqli_connect라는 함수를 실행
            //그 결과값을 토큰으로 $conn에 넣어준다.
            $conn=mysqli_connect("localhost","root","autoset","mydb"); 
        ?>

        <table border="1" cellspacing="5" cellpadding="10" >
            <tr>
                <th>이름</th>
                <th>전화번호</th>
                <th>이메일주소</th>
            </tr>
            <tr>
                <td>누구누구</td>
                <td>어저고어저고</td>
                <td>어디어디</td>
            </tr>
        </table>
    </body>
</html>