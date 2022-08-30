<?php
include("../common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글작성</title>
</head>
<body>
    <form action="write_ok.php" method="post">
        <span>작성자</span>
        <input type="hidden" type="text" name="userId" placeholder="작성자">
        <br>

        <span>제목</span>
        <input type="text" name="title" placeholder="제목">
        <br>

        <span>내용</span>
        <input type="text" name="content" placeholder="내용">
        <input type="submit" value="작성완료">
    </form>
    
</body>
</html>