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
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/join_style.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/common.css">

    <title>Dshare</title>
</head>

<body id="body">
    <main id="contentsJoinCheck">
        <section class="container">
            <article class="joinCheck-article">
                <div class="joinCheck">
                    <div class="joinCheckInner">
                        <h2>회원가입이 <span>완료되었습니다!</span></h2>
                        <h3>D-SHARE와 함께 <br>
                            즐거운 드라이브 되세요.</h3>
                        <a href="login.php"><button>로그인하러 가기</button></a>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //main -->

    <!--footer-->
    <footer>
        <?php
        include "../include/footer.php";
        ?>
    </footer>

</body>

</html>