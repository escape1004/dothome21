<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정완료</title>
</head>

<body>
    <?php
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $boardID = $_POST['boardID'];
        $boardTitle = $_POST['boardTitle'];
        $boardContent = $_POST['boardContent'];

        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContent = $connect -> real_escape_string($boardContent);
        $memberID = $_SESSION['myMemberID'];

        $sql = "SELECT * FROM myMember WHERE myMemberID = {$memberID}";
        $result = $connect -> query($sql);

        if($result){
            // $info = $result -> fetch_array(MYSQLI_ASSOC);

            //업데이트
            $sql = "UPDATE myBoard SET boardTitle = '{$boardTitle}', boardContent = '{$boardContent}' WHERE myBoardID = '{$boardID}';";
            $result = $connect -> query($sql);

            // echo "<pre>";
            //     var_dump($sql);
            // echo "</pre>";
        }
    ?>

    <script>
        location.href = "board.php";
    </script>
</body>

</html>