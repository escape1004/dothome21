<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="skip">
        <a href="#contents">로그인 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>로그인</h3>

                    <form name="login" action="loginSave.php" method="POST">
                        <fieldset>
                            <legend class="ir_so">로그인 입력폼</legend>
                            <div class="member-box">
                                <div>
                                    <label for="youEmail">이메일</label>
                                    <input type="email" name="youEmail" id="youEmail" class="input_write"
                                        placeholder="Sample@naver.com" autocolplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPass">비밀번호</label>
                                    <input type="password" name="youPass" id="youPass" class="input_write"
                                        maxlength="20" placeholder="비밀번호를 입력해주세요." autocolplete="off" required>
                                </div>
                            </div>
                        </fieldset>
                        <button id="loginBtn" class="btn_submit" type="submit">로그인</button>
                    </form>
                    <p class="info">* 새로 오신 분들은 회원가입을 해주세요. <a href="join.php">회원가입</a></p>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        footer
    </footer>
    <!-- //footer -->
</body>

</html>