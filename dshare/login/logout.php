<?php
    include "../connect/session.php";
    //loginSave에서 리절트정보 가져온것을 다시 unset 설정풀어주는거야.
    unset($_SESSION['myMemberID']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youName']);
?>

<script>
    location.href = "../login/login.php";
</script>