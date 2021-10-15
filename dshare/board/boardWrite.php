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
                    <h3>Q&A</h3>
                    <p>빠른시간 내에 응답드리도록 노력하겠습니다.</p>
                </div>
                <div class="board-write">
                    <form action="boardWriteSave.php" name="boardWrite" method="post" autocomplete="false">
                        <fieldset class="board-write-wrap">
                            <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                            <div class="boardTitle">
                                <label for="boardTitle" class="label-left bdrs">제목</label>
                                <input type="text" id="boardTitle" name="boardTitle" class="title-text bdrs"
                                    placeholder="제목을 입력해주세요." required />
                            </div>
                            <div class="boardContent">
                                <label for="boardContent" class="label-left-middle">내용</label>
                                <textarea name="boardContent" id="boardContent" class="title-text" rows="13"
                                    placeholder="내용을 작성해주세요." required></textarea>
                            </div>
                        </fieldset>
                        <button class="board-submit-btn" type="submit" value="등록하기">등록하기</button>
                    </form>
                    <a href="board.php"><button class="board-list-btn" value="목록">목록</button></a>
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