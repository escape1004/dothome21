<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/join_style.css">
</head>

<body id="body">

    <div id="skip">
        <a class="ir_so" href="../pages/join.php">회원가입 바로가기</a>
        <a class="ir_so" href="#footer">푸터 바로가기</a>
    </div>
    <!--//skip-->

    <header id="header">
        <?php
            include "../include/header.php"; 
        ?>
    </header>
    <!--//header-->
    <main id="contents_joinSave">
        <section class="container">
            <section id="mainCont" class="gray">
                <h2 class="ir_so">회원가입 컨텐츠</h2>
                <article class="content-article">
                    <div class="joinAlert">
                        <h4><?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youEmail = $_POST['youEmail'];
    $youUserName = $_POST['youUserName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();


    //메세지 출력
    function msg($alert){
        echo "<p class='alert'>{$alert}</p>";
    }

    // //아무것도 안썼을때 입력 유효성 검사
    // if($youEmail ==null || $youEmail == ''){
    //     msg("이메일을 입력해 주세요.");
    //     exit; 
    // }
    // if($youPass ==null || $youPass == ''){
    //     msg("비밀번호를 입력해 주세요.");
    //     exit; 
    // }
    // if($youPassC ==null || $youPassC == ''){
    //     msg("다시 한번 비밀번호를 입력해 주세요.");
    //     exit; 
    // }
    // if($youName ==null || $youName == ''){
    //     msg("이름을 입력해 주세요.");
    //     exit; 
    // }
    // if($youUserName ==null || $youUserName == ''){
    //     msg("닉네임을 입력해 주세요.");
    //     exit; 
    // }
    // if($youPhone ==null || $youPhone == ''){
    //     msg("핸드폰 번호를 입력해 주세요.");
    //     exit; 
    // }

    $check_email = filter_var($youEmail, FILTER_VALIDATE_EMAIL);

    if($check_email == false){
        msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요.");
        exit;
    }

    //비밀번호 검사
    if($youPass !== $youPassC) {
        msg("비밀번호가 일치하지 않습니다. <br> 다시 한번 확인해 주세요.");
        exit;
    }


    //비밀번호 암호화
    //$youPass = sha1($youPass);

    //이름검사
    $check_name = preg_match("/^[가-힣]{1,}$/", $youName);
    
    if( $check_name == false) {
        msg("이름이 정확하지 않습니다. <br> 한글로만 작성해주세요.");
        exit;
    }

    //휴대폰번호 검사
    $check_number = preg_match("/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/", $youPhone);
    
    if($check_number == false) {
        msg("전화번호가 정확하지 않습니다.<br> 올바른 번호/000-0000-0000/를 작성해 주세요.");
        exit;
    }

    //이메일 중복검사
    $isEmailCheck = false;

    $sql = "SELECT youEmail FROM myMember WHERE youEmail = '$youEmail'";
    $result = $connect -> query($sql);

    if($result) {
        $count = $result -> num_rows; //true여야해~!
        
        if($count == 0) {
            $isEmailCheck = true;
        } else {
            msg("이미 회원입니다. 로그인을 해주세요");
            exit;
        }
    } else {
        msg("에러발생01 - 관리자에게 문의하세요!");
        exit;
    }

    //핸드폰 중복 검사
    $isPhoneCheck = false;
    $sql = "SELECT youPhone FROM myMember WHERE youPhone = '$youPhone'";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
        
        if($count == 0) {
            $isPhoneCheck = true; //트리거변수
        } else {
            msg("이미 회원입니다. 로그인을 해주세요");
            exit;
        }
    } else {
        msg("에러발생02 - 관리자에게 문의하세요!");
        exit;
    }
    //데이터 가져오기 -> 유효성 검사 -> 중복 검사 -> 회원 가입
    //회원 가입
    if($isEmailCheck = true && $isPhoneCheck = true){
        $sql = "INSERT INTO myMember(youEmail, youName,	youUserName, youPass, youPhone, regTime) 
        VALUES('$youEmail', '$youName', '$youUserName','$youPass', '$youPhone', '$regTime')";
        $result = $connect -> query($sql);  

        if($result){
            Header("Location: ../login/joinCheck.php");
        }else{
            msg("에러발생03 : 관리자에게 문의하세요.");
            exit;
        }
    }else{
        msg("이메일 또는 핸드폰 번호가 틀립니다. 다시 한 번 확인해주세요.");
        exit;
    }
?></h4>
                    </div>
                </article>
            </section>
        </section>
    </main>
    <!--//contents-->

    <footer id="footer">
        <?php
            include "../include/footer.php"; 
        ?>
    </footer>
    <!--//footer-->

</body>

</html>