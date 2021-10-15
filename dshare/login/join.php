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

<body>
    <header>
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section class="container">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="form">
                    <div class="member-form">
                        <h3>회원가입</h3>
                        <h4>개인정보 수집 및 이용에 대한 안내</h4>
                        <div class="join-privacy">
                            <ul class="list">
                                <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                                <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                                <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                                <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                            </ul>
                            <input type="checkbox" name="privacy"  class="privacy" required />
                            <label for="privacy" class="privacyCheck">개인정보 수집 동의하기</label>
                        </div>
                        <form name="join" action="joinSave.php" method="POST">
                            <fieldset>
                                <legend class="ir_so">회원가입 입력폼</legend>
                                <div class="member-box">
                                    <div>
                                        <label for="youName">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write"
                                            placeholder="홍길동" autocmplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youEmail">이메일</label>
                                        <input type="email" name="youEmail" id="youEmail" class="input_write"
                                            placeholder="sample@naver.com" autocmplete="off" autofocus required>
                                    </div>
                                    <div>
                                        <label for="youUserName">닉네임</label>
                                        <input type="text" name="youUserName" id="youUserName" class="input_write"
                                            placeholder="닉네임을 입력하세요" autocmplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youPass">비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" class="input_write"
                                            maxlength="20" placeholder="비밀번호를 입력하세요" autocmplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youPassC">비밀번호 확인</label>
                                        <input type="password" name="youPassC" id="youPassC" class="input_write"
                                            maxlength="20" placeholder="다시 한 번 비밀번호를 입력하세요" autocmplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youPhone">핸드폰 번호</label>
                                        <input type="text" name="youPhone" id="youPhone" class="input_write"
                                            placeholder="000-0000-0000" autocmplete="off" required>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="joinBtn" class="btn_submit" type="submit">회원가입</button>
                        </form>
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