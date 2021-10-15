<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myRouteBoard (";
    $sql .= "myRouteBoardID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "routeBoardTitle varchar(50) NOT NULL,";
    $sql .= "routeBoardContent longtext NOT NULL,";
    $sql .= "routeBoardView int(10) unsigned NOT NULL,";
    $sql .= "routeTags varchar(300) NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myRouteBoardID)) CHARSET=utf8";

    $result = $connect -> query($sql);

    if($result) {
        echo "Create Board True";
    } else {
        echo "Create Board false";
    }
?>