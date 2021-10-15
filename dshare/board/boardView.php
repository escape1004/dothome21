<?php
include "../connect/connect.php";
include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/board_style.css">
</head>

<body>

    <div id="skip">
        <a class="ir_so" href="#contents">컨텐츠 바로가기</a>
        <a class="ir_so" href="#footer">푸터 바로가기</a>
    </div>
    <!--//skip-->
    <header id="header">
        <?php
        include "../include/header.php";
        ?>
    </header>
    <!--//header-->
    <main id="contents">
        <section class="container">
            <article class="boardViewType">
                <div class="boardView_top">
                    <?php
                    $boardID = $_GET['boardID'];

                    $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youUserName, b.regTime FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) 
                        WHERE b.myBoardID = {$boardID}";

                    $result = $connect -> query($sql);

                    $view = "UPDATE myBoard SET boardView = boardView+1 WHERE myBoardID = {$boardID}";

                    if ($result) {
                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                        echo "<h3>" . $info['boardTitle'] . "</h3>";
                        echo "<h4>" . $info['youUserName'] . "<h4>";
                        echo "<p>" . date('Y-m-d H:i', $info['regTime']) . "</p>";
                    }
                    ?>
                    <!-- <h3></h3>
                    <h4></h4>
                    <p></p> -->
                </div>
                <div class="boardView_middle">
                    <div class="boardView_content">
                        <?php
                        $boardID = $_GET['boardID'];

                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youUserName, b.regTime FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) 
                            WHERE b.myBoardID = {$boardID}";

                        $result = $connect -> query($sql);

                        $view = "UPDATE myBoard SET boardView = boardView+1 WHERE myBoardID = {$boardID}";

                        if ($result) {
                            $info = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<div class='boardView_content'>" . $info['boardContent'] . "</div>";
                        }
                        ?>
                    </div>
                </div>
            </article>
            <div class="boardView_bottom">
                <div class="left">
                    <a href="board.php"><button>목록</button></a>
                </div>
                <div class="right">
                    <?php 
                        $boardID = $_GET['boardID'];

                        $sql = "SELECT myMemberID FROM myBoard WHERE myBoardID = {$boardID};";

                        $result = $connect -> query($sql);

                        $info = $result -> fetch_array(MYSQLI_ASSOC);

                    if( $info['myMemberID'] == $_SESSION['myMemberID'] ){ ?>
                        <a href="boardRemove.php?boardID=<?= $_GET['boardID'] ?>" onclick="if(!confirm('정말 삭제하시겠습니까?')){return false;}"><button
                            class="right01">삭제하기</button></a>
                        <a href="boardModify.php?boardID=<?= $_GET['boardID'] ?>"><button class="right02">수정하기</button></a>
                    <?php
                        } else {
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <!--contents-->
    <footer>
        <?php
        include "../include/footer.php";
        ?>

    </footer>
    <!--footer-->
    <script>

    </script>
</body>

</html>