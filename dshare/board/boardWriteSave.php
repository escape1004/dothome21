<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];

    // echo $boardTitle, $boardContent;

    $myMemberID = $_SESSION['myMemberID'];
    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContent = $connect -> real_escape_string($boardContent);
    $boardView = 0;
    $regTime = time();

    //데이터 입력
    $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContent, boardView, regTime) ";
    $sql .= "VALUES ('$myMemberID', '$boardTitle', '$boardContent', '$boardView', '$regTime');";

    $result = $connect -> query($sql);

    // if( $result ){
    //     echo "goood";
    // } else {
    //     echo "BAD";
    // }
?>
<script>
    location.href = "board.php";
</script>