<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_GET['boardID'];
    $boardID = $connect -> real_escape_string($boardID);

    $sql = "DELETE FROM myBoard WHERE myBoardID = {$boardID}";
    $connect -> query($sql);

    if($result == true){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        //echo "<pre>";
        //var_dump($_SESSION);
        //echo "</pre>";
    } ($result == false)     
    
?>


<script>
    location.href = "board.php";
</script>