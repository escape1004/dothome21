<?php
ob_start();
include "../connect/session.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">

    <title>Dshare</title>
</head>

<body>
    <div class="inner">
        <div class="group">
            <a href="../index.html"><img src="../assets/img/LOGOSHARE.svg" alt="로고"></a>
            <div class="ham">
                <span></span>
            </div>
            <div class="X">
                <span></span>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav">
            <div class="inner">
                <ul class="left">
                    <li id="route_pop"><a href="../route-pop/routelist.php">인기</a></li>
                    <li id="route_new"><a href="../route-new/routelist.php">최신</a></li>
                    <li id="route_theme"><a href="../route-theme/routelist.php">테마</a></li>
                    <li id="route_dis"><a href="../route-dis/routelist.php">거리</a></li>
                </ul>
                <ul class="right">
                    <li id="root_tab"><a href="#c">루트생성</a></li>
                    <li id="bookmark_tab"><a href="#c">북마크</a></li>
                    <li id="board_tab"><a href="../board/board.php">Q&A</a></li>
                    <li id="login_tab">
                        <?php if( isset($_SESSION['myMemberID']) ){ ?>
                        <a href="#">MYPAGE</a>
                        <?php } else { ?>
                        <a href="../login/login.php">LOGIN</a>
                        <?php } ?>
                        </a></li>
                    <li id="logout_tab">
                        <?php if( isset($_SESSION['myMemberID']) ){ ?>
                        <a href="../login/logout.php">LOGOUT</a>
                        <?php } else { ?>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    // 메뉴
    document.querySelector(".ham").addEventListener("click", () => {
        document.querySelector("nav").classList.add("show");
    });

    document.querySelector(".ham").addEventListener("click", () => {
        document.querySelector(".ham").style.display = "none";
        document.querySelector(".X").style.display = "block";
    });

    document.querySelector(".X").addEventListener("click", () => {
        document.querySelector("nav").classList.remove("show");
        document.querySelector(".ham").style.display = "block";
        document.querySelector(".X").style.display = "none";
    });

    // 서브 메뉴 active
    const url_path = $(location).attr('pathname');
    const path = url_path.split('/')[1]

    switch (path) {
        case 'board':
            $("#board_tab").addClass("active");
            break;

        case 'login':
            $("#login_tab").addClass("active");
            break;

        case 'route-pop':
            $("#route_pop").addClass("active");
            break;

        case 'route-new':
            $("#route_new").addClass("active");
            break;

        case 'route-dis':
            $("#route_dis").addClass("active");
            break;

        case 'route-theme':
            $("#route_theme").addClass("active");
            break;
    }
</script>

</html>