<?php
include("../common.php");
$writer = $_SESSION['userId'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "
INSERT INTO project_board SET
writer = '$writer',
title = '$title',
content = '$content'
";
$result = $conn->query($sql);

if($result) {
    echo "
    <script>
        location.href='../home.html';
        alert('등록 성공.');
    </script>
    ";
} else {
    echo "
    <script>
        alert('등록 실패.');
        location.href=./board.php';
    </script>
    ";
}

?>