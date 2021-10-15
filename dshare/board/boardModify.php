<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dshare</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/board_style.css">
</head>

<style>
    body {
        font-family: 'S-CoreDream' !important;
    }
</style>

<body>
    <div id="skip">
        <a class="ir_so" href="#contents">컨텐츠 바로가기</a>
        <av class="ir_so" href="#footer">푸터 바로가기</a>
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
            <h2 class="ir_so">게시판</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3>게시글 수정하기</h3>
                </div>
                <div class="boardModify">
                    <form action="boardModifySave.php" name="boardModify" method="post">
                        <fieldset class="board-modify-wrap">
                            <legend class="ir_so">게시글 수정하기</legend>

                            <?php
                                $boardID = $_GET['boardID'];

                                $sql = "SELECT b.boardTitle, b.boardContent, m.youUserName FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                $result = $connect->query($sql);

                                if ($result) {
                                    $info = $result->fetch_array(MYSQLI_ASSOC);

                                    echo "<div style='display: none'><label for='boardID'>번호</label>";
                                    echo "<input type='text' name='boardID' id='boardID' value='".$_GET['boardID']."'></div>";
                                    echo "<div class='boardTitle'><label for='boardTitle' class='label-left bdrs'>제목</label>";
                                    echo "<input type='text' id='boardTitle' name='boardTitle' class='title-text bdrs'
                                    placeholder='".$info['boardTitle']."' value='". $info['boardTitle'] ."'></div>";
                                    echo "<div class='boardContent'><label for='boardContent' class='label-left-middle'>내용</label>";
                                    echo "<textarea name='boardContent' id='boardContent' class='title-text' placeholder='".$info['boardContent']."' rows='20'>" . $info['boardContent'] . "</textarea></div>";
                                }
                            ?>
                        </fieldset>
                        <button class="board-submit-btn" type="submit" value="수정하기">수정하기</button>
                    </form>
                    <a href="board.php"><button class="board-list-btn" value="취소">취소</button></a>
                </div>
            </article>
        </section>
    </main>
    <!--contents-->
    <footer>
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!--footer-->

</body>

</html>