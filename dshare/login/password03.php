<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/pageStyle/password_style.css">
</head>

<body>

    <div id="skip">
        <a class="ir_so" href="../pages/main.php">로그인 바로가기</a>
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
        <section id="mainCont" class="gray">
            <h2 class="ir_so">비밀번호 찾기 컨텐츠</h2>
            <article class="content-article">
                <div class="content-box">
                    <div class="member-form">
                        <h3>비밀번호 찾기</h3>
                        <div class="member-wrap">
                            <span>비밀번호를 변경해 주세요.</span>
                            <form name="login" action="login.php" method="POST">
                                <fieldset>
                                    <legend class="ir_so">이메일 찾기 입력폼</legend>
                                    <div class="member-box">
                                        <div class="login_youPass">
                                            <label class="ir_so" for="youPass">새 비밀번호</label>
                                            <input type="password" name="youPass" id="youPass" class="input_write top"
                                                maxlength="20" placeholder="새 비밀번호" autocomplete="false" required>
                                        </div>
                                        <div class="login_youPass">
                                            <label class="ir_so" for="youPass">새 비밀번호 확인</label>
                                            <input type="password" name="youPass" id="youPass" class="input_write bottom"
                                                maxlength="20" placeholder="새 비밀번호 확인" autocomplete="false" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <button id="loginBtn" type="submit" class="btn_submit">확인</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!--//contents-->

    <!--footer-->
    <footer>
        <?php
            include "../include/footer.php";
        ?>
    </footer>
</body>

</html>