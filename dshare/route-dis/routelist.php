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
    <title>Dshare</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/route_style.css">
</head>

<style>
    body {
        font-family: 'S-CoreDream' !important;
    }
</style>

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
            <h2 class="ir_so">드라이브코스</h2>
            <article class="content-article">
                <div class="boardType">
                    <div class="board">
                        <div class="board-search">
                            <form action="routeSearch.php" name="boardSearch" method="get">
                                <fieldset>
                                    <select name="searchOption" id="searchOption" class="form-select">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">등록자</option>
                                    </select>
                                    <legend class="ir_so">게시한 검색 영역</legend>
                                    <input type="search" name="searchKeyword" class="form-search" placeholder="검색어를 입력하세요"
                                        aria-label="search" required>
                                    <button type="submit" action="routeSearch.php" class="form-btn">검색</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="route">
                            <div class="route_wrap">
                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>파주시 임진각 관광지</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>평화로운 마음이 드는 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#힐링</span>
                                            <span>#휴가</span>
                                            <span>#산뜻</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>수원시 광교호수공원</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>밤산책 하러가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#데이트</span>
                                            <span>#밤산책</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>화성시 제부도</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>주말에 가깝에 바닷바람 쐬러 가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#주말</span>
                                            <span>#서해안</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>파주시 임진각 관광지</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>평화로운 마음이 드는 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#힐링</span>
                                            <span>#휴가</span>
                                            <span>#산뜻</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>
                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>수원시 광교호수공원</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>밤산책 하러가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#데이트</span>
                                            <span>#밤산책</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>화성시 제부도</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>주말에 가깝에 바닷바람 쐬러 가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#주말</span>
                                            <span>#서해안</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>파주시 임진각 관광지</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>평화로운 마음이 드는 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#힐링</span>
                                            <span>#휴가</span>
                                            <span>#산뜻</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>
                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>수원시 광교호수공원</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>밤산책 하러가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#데이트</span>
                                            <span>#밤산책</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>

                                <a href="routeView.php"><div class="routeBox">
                                    <div class="routeBox_top">
                                        <h3>화성시 제부도</h3>
                                    </div>
                                    <div class="routeBox_middle">
                                        <p>주말에 가깝에 바닷바람 쐬러 가기 좋은 코스</p>
                                    </div>
                                    <div class="routeBox_bottom">
                                        <span class="tag">
                                            <span>#주말</span>
                                            <span>#서해안</span>
                                        </span>
                                        <span class="img">
                                            <img src="../../../assets/img/like.png" alt="하트 이미지">
                                        </span>
                                    </div>
                                </a></div>
                            </div>
                        </div>
                        <div class="board-page">
                            <h3 class="ir_so">페이지넘기기</h3>
                        </div>
                    </div>
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