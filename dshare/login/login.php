<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/pageStyle/login_style.css">
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
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <div class="content-box">
                    <div class="member-form">
                        <h3>LOGIN</h3>
                        <form name="login" action="loginSave.php" method="POST" autocomplete="new-password">
                            <fieldset>
                                <legend class="ir_so">로그인 입력폼</legend>
                                <div class="member-box">
                                    <div class="login_youEmail">
                                        <label class="ir_so" for="youEmail">이메일</label>
                                        <input type="email" name="youEmail" id="youEmail" class="input_write"
                                            placeholder="E-MAIL" autocomplete="new-password" autofocus required>
                                    </div>
                                    <div class="login_youPass">
                                        <label class="ir_so" for="youPass">비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" class="input_write"
                                            maxlength="20" placeholder="PASSWORD" autocomplete="false" required>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="loginBtn" type="submit" class="btn_submit">로그인</button>
                            <!--submit하면 위에 aciton주소로 넘어가게끔-->
                        </form>
                    </div>
                    <span class="bottom">
                        <a href="join.php">회원가입</a>
                        <span class="find">
                            <a href="/login/id.php">아이디</a>
                            <a href="/login/id.php">· 비밀번호 찾기</a>
                        </span>
                    </span>
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