<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <!--style-->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/login_style.css">
</head>

<body>
    <div id="skip">
        <a href="../pages/main.php" class="ir_so">로그인 바로가기</a>
        <a href="#footer" class="ir_so">푸터 바로가기</a>
    </div>
    <!--//skip-->
    <header id="header">
        <?php
            include "../include/header.php"; //헤더부분 php를 따로만들어서 header태그안에 연결만 시켜주기.
        ?>
    </header>
    <!--//header-->
    <main id="contents">
        <section class="container">
            <section id="mainCont" class="gray">
                <h2 class="ir_so">로그인 컨텐츠</h2>
                <article class="content-article">
                    <div class="loginSaveForm">
                        <?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];

    //메세지출력
    function msg($alert){
        echo "<p class='alert'>{$alert}</p>";  
    }

    //이메일검사
    if( !filter_var($youEmail, FILTER_VALIDATE_EMAIL) ) {
        msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!");
        exit;
    }

    //비밀번호검사
    if($youPass == null || $youPass == ''){
        msg("비밀번호를 입력해주세요.");
        exit;
    }

    //데이터 가져오기 ->유효성 검사 -> 데이터조회
    $sql = "SELECT myMemberID, youEmail, youName, youPass FROM myMember WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows; //count가 정보갯수를 가져온거라 0이면 가입된정보가 없는거지

        if($count == 0) {
            msg("이메일 또는 비밀번호가 틀렸습니다.");
            exit;
        } else {
            //로그인 성공해서 메인페이지로 넘겨준거야
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC); //리절트 정보를 가져온겨

            $_SESSION['myMemberID'] = $memberInfo['myMemberID'];
            $_SESSION['youEmail'] = $memberInfo['youEmail'];
            $_SESSION['youName'] = $memberInfo['youName'];

            //echo "<pre>";
            //var_dump($memberInfo);
            //echo "</pre>";

            Header("Location: ../board/board.php");
        }
    } else {
        msg ("에러발생 - 관리자에게 문의하세요!");
    }
?>
                    </div>
                </article>
            </section>
    </main>

    <!--footer-->
    <footer>
        <?php
            include "../include/footer.php";
        ?>
    </footer>
</body>

</html>