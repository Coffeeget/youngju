<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">
</head>
<body>
<header>
<?php
    session_start(); //세션 시작. 

?>
<?php
    include "define.php";


    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = ""; //null. 즉 로그인 상태가 아니라면 

    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";

?>
</header> 
<section>
    <div id="admin_box">
        <h3 id="member_title">관리자 모드 > 회원관리</h3>
        <ul id="member_list">
            <li>
                <span class="col1">번호</span>
                <span class="col2">아이디</span>
                <span class="col3">이름</span>
                <span class="col4">레벨</span>
                <span class="col5">포인트</span>
                <span class="col6">가입일</span>
                <span class="col7">수정</span>
                <span class="col8">삭제</span>
            </li>
<?php
//DB에서 전체 회원 가져오기
$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
$sql = "select * from members order by num desc";
$result = mysqli_query($con, $sql);
$total_record = mysqli_num_rows($result); //전체 회원 수

$number = $total_record;

while ($row = mysqli_fetch_array($result))
{
    $num         = $row["num"];
    $id          = $row["id"];
    $name        = $row["name"];
    $level       = $row["level"];
    $point       = $row["point"];
    $regist_day  = $row["regist_day"];


?>
        <li>
            <form action="admin_member_update.php?num=<?=$num?>" method="post">
                <span class="col1"><?=$number?></span>
                <span class="col2"><?=$id?></span>
                <span class="col3"><?=$name?></span>
                <span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
                <span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
                <span class="col6"><?=$regist_day?></span>
                <span class="col7"><button type="submit">수정</button></span>
                <span class="col8">
                    <button onclick="location.href='admin_member_delete.php?num=<?=$num?>'" >삭제</button>
                </span>
            </form>
        </li>
<?php
    $number--;
}
?>
        </ul>
        <h3 id="member_title">관리자 모드 > 게시판 관리</h3>
        <ul id="board_list">
            <li class="title">
                <span class="col1">선택</span>
                <span class="col2">번호</span>
                <span class="col3">이름</span>
                <span class="col4">제목</span>
                <span class="col5">첨부파일명</span>
                <span class="col6">작성일</span>
            </li>
            <form action="admin_board_delete.php" method="post">
<?php
    //게시판의 모든 글 가져오기
    $sql = "select * from board order by num desc";
    $result = mysqli_query($con, $sql);
    $total_record = mysqli_num_rows($result); //전체 글 수

    $number = $total_record;

    while($row = mysqli_fetch_array($result))
    {
        $num          = $row["num"];
        $name         = $row["name"];
        $subject      = $row["subject"];
        $file_name    = $row["file_name"];
        $regist_day   = $row["regist_day"];
        $regist_day   =  substr($regist_day,0,10)
        
?>
        <li>
            <span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
            <span class="col2"><?=$number?></span>
            <span class="col3"><?=$name?></span>
            <span class="col4"><?=$subject?></span>
            <span class="col5"><?=$file_name?></span>
            <span class="col6"><?=$regist_day?></span>

        </li>
<?php
    $number--;
  }
  mysqli_close($con);

?>
                <button type="submit">선택된 글 삭제</button>
            </form>
        </ul>
    </div>
</section>   
</body>
</html>