<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";
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
                    <?php
                    $searchKeyword = $_GET['searchKeyword'];
                    $searchOption = $_GET['searchOption'];
                    //echo $searchOption, $searchKeyword;


                    if ($searchKeyword == '' || $searchKeyword == null) {
                        echo "<p>검색어가 없습니다.</p>";
                    }
                    ?>
                    <div class="board">
                        <div class="board-search">
                            <form action="boardSearch.php" name="boardSearch" method="get">
                                <fieldset>
                                    <legend class="ir_so">게시한 검색 영역</legend>
                                    <input type="search" name="searchKeyword" class="form-search" placeholder="검색어 입력" aria-label="search" required>
                                    <select name="searchOption" id="searchOption" class="form-select">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">글쓴이</option>
                                    </select>
                                    <button type="submit" class="form-btn">검색</button>

                                </fieldset>
                            </form>
                        </div>
                        <div class="board-table">
                            <table>
                                <colgroup>
                                    <col style="width: 5%">
                                    <col>
                                    <col style="width: 10%">
                                    <col style="width: 12%">
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
                                    <tr>
                                        <?php
                                        $searchKeyword = $connect->real_escape_string($searchKeyword);
                                        $searchOption = $connect->real_escape_string($searchOption);

                                        $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youUserName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID)";

                                        switch ($searchOption) {
                                            case 'title':
                                                $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                            case 'content':
                                                $sql .= "WHERE b.boardContent LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                            case 'name':
                                                $sql .= "WHERE m.youUserName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                        }

                                        $result = $connect->query($sql);

                                        if ($result) {
                                            $count = $result->num_rows;

                                            if ($count > 0) {
                                                for ($i = 1; $i <= $count; $i++) {
                                                    $info = $result->fetch_array(MYSQLI_ASSOC);
                                                    echo "<tr>";
                                                    echo "<td>" . $info['myBoardID'] . "</td>";
                                                    echo "<td><a href='boardView.php?boardID={$info['myBoardID']}'>" . $info['boardTitle'] . "</a></td>";
                                                    echo "<td>" . $info['youUserName'] . "</td>";
                                                    echo "<td>" . date('Y-m-d', $info['regTime']) . "</td>";
                                                    echo "<td>" . $info['boardView'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            echo "<p>총 " . $count . "건이 검색되었습니다.</p>";
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="boardView_bottom">
                            <a href="board.php"><button class="list">목록</button></a>
                            <a class="form-btn black" type="submit" value="목록" href="boardWrite.php">글쓰기</a>
                        </div>
                        <div class="board-page">
                            <ul>
                                <li class="active"><a href="#">1</a></li>
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