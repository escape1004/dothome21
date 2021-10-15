<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 찾기</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/pageStyle/id_style.css">
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
            <h2 class="ir_so">이메일 찾기 컨텐츠</h2>
            <article class="content-article">
                <div class="content-box">
                    <div class="member-form">
                        <h3>아이디/비밀번호 찾기</h3>
                        <div class="member-wrap">
                            <form name="login" action="loginSave.php" method="POST">
                                <input type="radio" name="find" class="checkbox phone" id="checkbox_phone">
                                <label for="checkbox_phone">회원정보로 등록한 휴대전화로 인증</label>
                                <fieldset class="submitForm1">
                                    <legend class="ir_so">이메일 찾기 입력폼</legend>
                                        <div class="Submit left">
                                            <label for="youName" class="name">이름</label>
                                            <label for="youPhone" class="phone">핸드폰 번호</label>
                                            <span>인증번호</span>
                                        </div>
                                        <div class="Submit middle">
                                            <div class="login_youName">
                                                <input type="text" name="youName" id="youName" class="input_write"
                                                    maxlength="20" placeholder="홍길동" autocomplete="off" required>
                                            </div>
                                            <div class="login_youPhone">
                                                <select name="searchOption" id="searchOption" class="form-select">
                                                    <option value="(+82)대한민국">+82</option>
                                                    <option value="(+86)中国">+86</option>
                                                    <option value="(+44)UK">+44</option>
                                                    <option value="(+1)USA">+1</option>
                                                    <option value="(+213)Algeria">+213</option>
                                                    <option value="(+376)Andorra">+376</option>
                                                    <option value="(+244)Angola">+244</option>
                                                    <option value="(+1264)Anguilla">+1264</option>
                                                    <option value="(+54)Argentina">+54</option>
                                                    <option value="(+374)Armenia">+374</option>
                                                    <option value="(+297)Aruba">+297</option>
                                                    <option value="(+61)Australia">+61</option>
                                                </select>
                                                <input type="text" name="youPhone" id="youPhone" class="input_write"
                                                    maxlength="13" placeholder="전화번호" autocomplete="off" required>
                                            </div>
                                                <div class="login_confirm">
                                                    <label class="ir_so" for="confirm">인증번호 입력</label>
                                                    <input type="text" name="confirm" id="confirm" class="input_write"
                                                    maxlength="13" placeholder="인증번호 6자리 입력" autocomplete="off" required>
                                                </div>
                                        </div>
                                        <div class="Submit right">
                                             <button id="loginBtn" type="submit" class="btn_submit">인증번호 받기</button>
                                        </div>
                                </fieldset>

                                <hr class="spaceLine">

                                <input type="radio" name="find" class="checkbox email" id="checkbox_email">
                                <label for="checkbox_email">이메일로 인증</label>
                                <fieldset class="submitForm2">
                                    <legend class="ir_so">이메일 찾기 입력폼</legend>
                                    <div class="Submit left">
                                            <label for="youName" class="name">이름</label>
                                            <label for="youEmail" class="email">이메일</label>
                                            <span>인증번호</span>
                                        </div>
                                        <div class="Submit middle">
                                            <div class="login_youName">
                                                <input type="text" name="youName" id="youName" class="input_write"
                                                    maxlength="20" placeholder="홍길동" autocomplete="off" required>
                                            </div>
                                            <div class="login_youEmail">
                                                <input type="email" name="youEmail" id="youEmail" class="input_write"
                                                    maxlength="13" placeholder="sample@naver.com" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="login_confirm">
                                                <label class="ir_so" for="confirm">인증번호 입력</label>
                                                <input type="text" name="confirm" id="confirm" class="input_write"
                                                maxlength="13" placeholder="인증번호 6자리 입력" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="Submit right">
                                             <button id="loginBtn" type="submit" class="btn_submit2">인증번호 받기</button>
                                        </div>
                                </fieldset>
                                <button id="loginBtn" type="submit" class="btn_next">다음</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(".checkbox").click(function () {
            if ($("#checkbox_phone").prop("checked") == true) {
                $(".submitForm1").addClass("show");
                $(".submitForm2").removeClass("show");
            } else {
                $(".submitForm2").addClass("show");
                $(".submitForm1").removeClass("show");
            }
        });
    </script>
</body>

</html>