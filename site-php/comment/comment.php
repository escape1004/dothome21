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
    <title>댓글</title>
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
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
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <section class="cardType">
                    <div class="cardType01">
                        <h2>게이밍 기어</h2>
                        <p>요즘 핫한 주변 기기에 대해 알려주는 사이트 입니다. 장비에 대해 아무것도 모르는 컴맹이더라도 간단하게 정보를 알아갈 수 있습니다.</p>
                        <div class="card-wrap">
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/image/card01.jpg" alt="마우스 관련 이미지" class="card-img">
                                    <strong class="card-title">마우스</strong>
                                    <span class="card-desc">센서, 무게, 그립감 등 사용자에게 맞는 마우스의 정보를 제공해 주는 사이트입니다.</span>
                                    <span class="card-keyword">
                                        <span>#로지텍</span>
                                        <span>#스틸시리즈</span>
                                    </span>
                                </a>
                            </div>

                            <div class="card">
                                <div>
                                    <a href="#">
                                        <img src="../assets/image/card02.jpg" alt="키보드 관련 이미지" class="card-img">
                                        <strong class="card-title">키보드</strong>
                                        <span class="card-desc">각종 키보드 축에 대한 정보, 윤활, 보강 등의 키보드의 정보를 제공해 주는
                                            사이트입니다.</span>
                                        <span class="card-keyword">
                                            <span>#스위치</span>
                                            <span>#스테빌라이저</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div>
                                    <a href="#">
                                        <img src="../assets/image/card03.jpg" alt="음향기기 관련 이미지" class="card-img">
                                        <strong class="card-title">음향기기</strong>
                                        <span class="card-desc">사용자에게 맞는 헤드셋, 이어폰, 마이크 등의 음향기기에 대한 정보를 제공해 주는
                                            사이트입니다.</span>
                                        <span class="card-keyword">
                                            <span>#사운드 카드</span>
                                            <span>#오인페</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <article class="flow-article">
                <h3 class="ir_so">튜닝 견적 신청하기</h3>
                <section id="comment" class="section-comment">
                    <h4>튜닝 견적 신청하기</h4>
                    <p>자신의 기어를 공방에 맡겨보세요!</p>
                    <div class="comment-form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">기어 이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2"
                                            placeHolder="기어 이름" autocomplete="off" maxlength="15" required>
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">작업내용</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100"
                                            placeHolder="필요한 튜닝 작업" autocomplete="off" required>
                                    </div>
                                    <button class="btn_submit2" type="submit" value="신청하기">Enter</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);

                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "</pre>";

                            while( $info = mysqli_fetch_array($result) ) {
                        ?>        
                            <div>
                                <p><?=$info['youText']?></p>
                                <div>
                                    <img src="https://escape1004.github.io/dothome21/class/img/img05.jpg" alt="profile_img">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                        <?php
                            }
                        ?>

                        <!-- <div>
                            <p>스틸시리즈 Prime+ : 도색 작업, 파라코드, 스위치 교체</p>
                            <div>
                                <img src="https://escape1004.github.io/dothome21/class/img/img05.jpg" alt="profile_img">
                                <span>박세진</span>
                                <span>2021-09-16</span>
                            </div>
                        </div> -->
                    </div>
                </section>
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