<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContent = $connect -> real_escape_string($boardContent);
    $boardView = 0;
    $regTime = time();
    $memberID = $_SESSION['myMemberID'];

    // 데이터 입력
    $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContent, boardView, regTime) 
            VALUES('$memberID', '$boardTitle', '$boardContent', '$boardView', '$regTime')";

    $result = $connect -> query($sql);
?>

<script>
    location.href = "board.php";
</script>