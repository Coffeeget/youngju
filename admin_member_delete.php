<?php
    include "define.php";

    session_start();

    //회원레벨 가져오기 : 
    if(isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if($userlevel != 1)
    {
        echo("
            <script>
                alert('관리자가 아닙니다. 회원정보 삭제 관리자만 가능합니다.!');
                history.go(-1)
            </script>
        ");
        exit;
    }

    $num   = $_GET["num"];

    
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql = "delete from members where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo ("
    <script>
    location.href = 'admin.php';
    </script>
    ");
?>