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
    <title>Dshare</title>

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/pageStyle/board_style.css">
</head>

<style>
    body {
        font-family: 'S-CoreDream' !important;
    }
</style>

<body>
    <div id="skip">
        <a class="ir_so" href="#contents">컨텐츠 바로가기</a>
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
        <section class="container">
            <h2 class="ir_so">게시판</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3>Q&A</h3>
                    <p>빠른시간 내에 응답드리도록 노력하겠습니다.</p>
                    <div class="board">
                        <div class="board-search">
                            <form action="boardSearch.php" name="boardSearch" method="get">
                                <fieldset>
                                    <legend class="ir_so">게시한 검색 영역</legend>
                                    <input type="search" name="searchKeyword" class="form-search" placeholder="검색어 입력"
                                        aria-label="search" required>
                                    <select name="searchOption" id="searchOption" class="form-select">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">등록자</option>
                                    </select>
                                    <button type="submit" action="boardSearch.php" class="form-btn">검색</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="board-table">
                            <table>
                                <colgroup>
                                    <col style="width: 5%">
                                    <col>
                                    <col style="width: 10%">
                                    <col style="width: 20%">
                                    <col style="width: 7%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>글쓴이</th>
                                        <th>등록일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_GET['page'])){
                                            $page = (int) $_GET['page'];
                                        } else {
                                            $page = 1;
                                        }
                                        
                                        $numView = 15;
                                        $viewLimit = ($numView * $page) - $numView;

                                        //board + member
                                        $sql = "SELECT b.myBoardID, b.boardTitle, m.youUserName, b.boardView, b.regTime FROM myMember m JOIN myBoard b ON (m.myMemberID = b.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$numView}";
                                        $result = $connect -> query($sql);
                                    
                                        if($result){
                                            $count = $result -> num_rows;

                                            if($count > 0){
                                                for($i=1; $i<=$count; $i++){
                                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                                    echo "<tr>";
                                                    echo "<td>".$info['myBoardID']."</td>";
                                                    echo "<td><a href='boardView.php?boardID={$info['myBoardID']}'>".$info['boardTitle']."</a></td>";
                                                    echo "<td>".$info['youUserName']."</td>";
                                                    echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                                    echo "<td>".$info['boardView']."</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                        }

                                    ?>

                                    <!-- <tr>
                                        <td>41</a></td>
                                        <td><a href="boardView.php">비밀번호를 잃어버렸어요.</a> </td>
                                        <td>박세진</td>
                                        <td> 2021-10-03</td>
                                        <td> 3</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td><a href="boardView.php">제가 직접 코스를 등록할수 있나요?</a></td>
                                        <td>김은채</td>
                                        <td>021-10-02</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td><a href="boardView.php">앱스토어에서 못찾겠어요.</a></td>
                                        <td>박소은</td>
                                        <td>2021-10-01</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td><a href="boardView.php">연동되는 지도는 어떤것이 있나요?</a></td>
                                        <td>김현정</td>
                                        <td>2021-09-29</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td><a href="boardView.php">사용시 무한로딩에 걸립니다.</a></td>
                                        <td>임지현</td>
                                        <td>2021-09-29</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td><a href="boardView.php">닉네임 변경은 어디서 하나요?</a></td>
                                        <td>강동재</td>
                                        <td>2021-09-28</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td><a href="boardView.php">탈퇴하고 싶어요.</a></td>
                                        <td>정은지</td>
                                        <td>2021-09-28</td>
                                        <td>3</td>
                                    </tr>
                                    <tr class="none">
                                        <td>34</td>
                                        <td><a href="boardView.php">비밀번호를 잃어버렸어요.</a></td>
                                        <td>박준승</td>
                                        <td>2021-09-27</td>
                                        <td>2</td>
                                    </tr> -->

                                </tbody>
                            </table>

                        </div>
                        <a class="form-btn black" type="submit" value="목록" href="boardWrite.php">글쓰기</a>

                        <div class="board-page">
                            <ul>

                                <?php
                                    $sql = "SELECT count(myBoardID) FROM myBoard";
                                    $result = $connect -> query($sql);

                                    $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
                                    $boardTotalCount = $boardTotalCount['count(myBoardID)'];

                                    //echo "전체 갯수: .$boardTotalCount";

                                    //총 페이지 수
                                    $boardTotalPage = ceil($boardTotalCount/$numView);

                                    // echo "총 페이지 수 :" .$boardTotalPage;

                                    // 1 2 3 4 5 6 7 8 9 10 11
                                    //현재 페이지를 기준으로 보여주고 싶은 갯수 설정
                                    $pageView = 4;
                                    $startPage = $page - $pageView;
                                    $endPage = $page + $pageView;

                                    //처음페이지 초기화 
                                    if($startPage < 1) $startPage = 1;

                                    //마지막 페이지 초기화
                                    if($endPage >= $boardTotalPage) $endPage = $boardTotalPage;
                                    

                                    //이전 페이지
                                    if( $page != 1 ){
                                        $prevPage = $page - 1;
                                        echo "<li><a href='board.php?page={$prevPage}'><</a></li>";
                                    }


                                    for( $i=$startPage; $i<=$endPage; $i++ ){
                                        $active = '';
                                        if($i == $page) $active = "active";

                                        echo "<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
                                    }

                                    //다음페이지
                                    if( $page != $endPage ){
                                        $nextPage = $page + 1;
                                        echo "<li><a href='board.php?page={$nextPage}'>></a></li>";
                                    }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!--contents-->
    <footer>
        <?php
            include "../include/footer.php";
        ?>

    </footer>
    <!--footer-->

</body>

</html>