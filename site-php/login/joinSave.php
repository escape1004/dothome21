<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();

    // echo $youEmail, $youPass, $youPassC, $youName, $youBirth, $youPhone;

    $sql = "INSERT INTO myMember(youEmail, youPass, youName, youBirth, youPhone, regTime) ";
    $sql .= "VALUES('$youEmail', '$youPass', '$youName', '$youBirth', '$youPhone', '$regTime');";

    $result = $connect -> query($sql);

    if ($result) {
        echo "INSERT INTO true";
    } else {
        echo "INSERT INTO false";
    }
?>