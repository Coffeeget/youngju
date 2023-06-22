<?php
    include "define.php";

    $num = $_GET["num"];
    $page = $_GET["page"];

    //삭제할 첨부 파일명 가져오기
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"]; //첨부파일명을 구하여 $copied_name담고

    //첨부파일 삭제
    if($copied_name)
    {
        $file_path = "./data/".$copied_name;
        unlink($file_path); //서버에 저장된 첨부파일 삭제
    }

    //db에서 해당 레코드 삭제
    $sql = "delete from board where num=$num";
    mysqli_query($con,$sql);
    mysqli_close($con);

    echo ("
    <script>
    location.href = 'sub03.php?page=$page';
    </script>
");



?>