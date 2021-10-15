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
    <link rel="stylesheet" href="../assets/css/pageStyle/route_style.css">

    <script src="https://apis.openapi.sk.com/tmap/jsv2?version=1&appKey=l7xx46c00b11477744339549d3160f8ae14a"></script>


</head>


<body onload="initTmap()">
    <div id="skip">
        <a class="ir_so" href="#contents">컨텐츠 바로가기</a>
        <a class="ir_so" href="footer">푸터 바로가기</a>
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
            <h2 class="ir_so">드라이브코스</h2>
            <article class="content-article">
                <div class="boardType">
                    <div class="board">
                        <div class="board-search">
                            <form action="routeSearch.php" name="boardSearch" method="get">
                                <fieldset>
                                    <select name="searchOption" id="searchOption" class="form-select">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">등록자</option>
                                    </select>
                                    <legend class="ir_so">게시한 검색 영역</legend>
                                    <input type="search" name="searchKeyword" class="form-search"
                                        placeholder="  검색어를 입력하세요" aria-label="search" required>
                                    <button type="submit" action="routeSearch.php" class="form-btn">검색</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="routeView">
                            <div class="routeViewDesc">
                                <h1>파주시 임진각 관광지</h1>
                                <h5>UserName</h5>
                                <h3>평화로운 마음이 드는 코스. 도착지 주변에 평화랜드가 있어 유원지 구경하기에도 좋고, 주변에 유명한 베이커리 카페가 있다.</h3>
                                <p>총 거리 14.5km</p>
                            </div>
                            <div class="map">
                                <div class="routeInfo">
                                    <span class="start">파주역 경의중앙선</span>
                                    <span class="dropby">경기도 파주시 문산읍 사목리 207-2</span>
                                    <span class="destination">동마기업평화랜드</span>
                                    <div class="center">
                                        <a href="#">
                                            <p>안내 시작</p>
                                        </a>
                                    </div>
                                </div>
                                <div id="map_div"></div>
                            </div>
                            <div class="interation">
                                <div class="heart">
                                    <div class="like"></div>
                                    <p>1,234</p>
                                </div>
                                <div class="tags">
                                    <a href="#"> <span>#힐링</span></a>
                                    <a href="#"> <span>#휴가</span></a>
                                    <a href="#"> <span>#산뜻</span></a>
                                    <a href="#"> <span>#여름</span></a>
                                </div>
                                <hr>
                                <div class="comments">
                                    <h4>Comments</h4>
                                    <h5>댓글을 입력해주세요.</h5>
                                </div>
                            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(".like").click(function () {
        if ($(".like").hasClass("active")) {
            $(".like").removeClass("active");
        } else {
            $(".like").addClass("active");
        }
    });

    // 1. 지도 띄우기
    map = new Tmapv2.Map("map_div", {
        center: new Tmapv2.LatLng(37.52084364186228, 127.058908811749),
        width: "58%",
        height: "400px"
    });


    // 2. 시작, 도착 심볼찍기

    var markerList = [];
    var pointArray = [];

    // 시작
    addMarker("llStart", 127.02810900563199, 37.519892712436906, 1);
    // 도착 
    addMarker("llEnd", 127.11971717230388, 37.49288934463672, 2);

    function addMarker(status, lon, lat, tag) {
        //출도착경유구분
        //이미지 파일 변경.
        var markerLayer;
        switch (status) {
            case "llStart":
                imgURL = 'http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_s.png';
                break;
            case "llPass":
                imgURL = 'http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_p.png';
                break;
            case "llEnd":
                imgURL = 'http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_e.png';
                break;
            default:
        };
        var marker = new Tmapv2.Marker({
            position: new Tmapv2.LatLng(lat, lon),
            icon: imgURL,
            map: map
        });
        // 마커 드래그 설정
        marker.tag = tag;
        marker.addListener("dragend", function (evt) {
            markerListenerEvent(evt);
        });
        marker.addListener("drag", function (evt) {
            markerObject = markerList[tag];
        });
        markerList[tag] = marker;
        return marker;
    }


    // 3. 경유지 심볼 찍기
    addMarker("llPass", 127.07389565460413, 37.5591696189164, 3);
    addMarker("llPass", 127.13346617572014, 37.52127761904626, 4);


    // 4. 경로탐색 API 사용요청
    var startX = 127.02810900563199;
    var startY = 37.519892712436906;
    var endX = 127.11971717230388;
    var endY = 37.49288934463672;
    var passList = "127.07389565460413,37.5591696189164_127.13346617572014,37.52127761904626";
    var prtcl;
    var headers = {};
    headers["appKey"] = unq_tmak;
    $.ajax({
        method: "POST",
        headers: headers,
        url: 'https://apis.openapi.sk.com/tmap/routes?version=1&format=json',
        async: false,
        data: {
            startX: startX,
            startY: startY,
            endX: endX,
            endY: endY,
            passList: passList,
            reqCoordType: "WGS84GEO",
            resCoordType: "WGS84GEO",
            angle: "172",
            searchOption: "0",
            trafficInfo: "Y"
        },
        success: function (response) {
            prtcl = response;

            // 5. 경로탐색 결과 Line 그리기 
            var trafficColors = {
                extractStyles: true,
                /* 실제 교통정보가 표출되면 아래와 같은 Color로 Line이 생성됩니다. */
                trafficDefaultColor: "#636f63", //Default
                trafficType1Color: "#19b95f", //원할
                trafficType2Color: "#f15426", //지체
                trafficType3Color: "#ff970e" //정체		
            };
            var style_red = {
                fillColor: "#FF0000",
                fillOpacity: 0.2,
                strokeColor: "#FF0000",
                strokeWidth: 3,
                strokeDashstyle: "solid",
                pointRadius: 2,
                title: "this is a red line"
            };
            drawData(prtcl);


            // 6. 경로탐색 결과 반경만큼 지도 레벨 조정
            var newData = geoData[0];
            PTbounds = new Tmapv2.LatLngBounds();
            for (var i = 0; i < newData.length; i++) {
                var mData = newData[i];
                var type = mData.geometry.type;
                var pointType = mData.properties.pointType;
                if (type == "Point") {
                    var linePt = new Tmapv2.LatLng(mData.geometry.coordinates[1], mData.geometry
                        .coordinates[0]);
                    console.log(linePt);
                    PTbounds.extend(linePt);
                } else {
                    var startPt, endPt;
                    for (var j = 0; j < mData.geometry.coordinates.length; j++) {
                        var linePt = new Tmapv2.LatLng(mData.geometry.coordinates[j][1], mData.geometry
                            .coordinates[j][0]);
                        PTbounds.extend(linePt);
                    }
                }
            }
            map.fitBounds(PTbounds);
        },
        error: function (request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        }
    });
</script>

</html>