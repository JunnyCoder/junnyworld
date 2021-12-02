<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입완료</title>
</head>
<body>
<?php
    $userID = $_REQUEST["userid"];
    $userPass = $_REQUEST["userpass"];
    $userName = $_REQUEST["username"];
    $userTel = $_REQUEST["tel0"].'-'.$_REQUEST["tel1"].'-'.$_REQUEST["tel2"];

?>
<h1><?=$userName?>님 회원가입이 완료되었습니다.</h1>
<p>가입된 회원정보는 아래와 같습니다.</p>
<br>
<ul>
    <li>아이디 : <?=$userID?></li>
    <li>이름 : <?=$userName?></li>
    <li>전화번호 : <?=$userTel?></li>
</ul>
</body>
</html>