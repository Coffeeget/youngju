<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 수정페이지</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
    <script>
        function check_input() {
            if (!document.board_form.subject.value)
            {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if (!document.board_form.content.value)
            {
                alert("내용을 입력하세요!");    
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }
    </script>
</head>
<body>
<header>
	<?php include "header.php";?>
</header>  
<section>
    <div id="main_img_bar"></div>
    <div id="board_box">
        <h3 class="board_title">게시판 > 글 쓰기</h3>
<?php
    //글 내용보기 페이지로부터 레코드 번호와 페이지 번호 전달받기
    $num = $_GET["num"];
    $page = $_GET["page"];

    //db에서 글 정보 가져오기
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

    //$result에서 데이터 가져오기
    $row = mysqli_fetch_array($result);
    $name         = $row["name"];
    $subject      = $row["subject"];
    $content      = $row["content"];
    $file_name    = $row["file_name"];

?>
    <form action="board_modify.php?num=<?=$num?>&page=<?=$page?>" method="post" name="board_form" enctype="multipart/form-data">
        <ul id="board_form">
            <li>
                <span class="col1">이름 : </span>
                <span class="col2"><?=$name?> </span>
            </li>
            <li>
                <span class="col1">제목 : </span>
                <span class="col2"><input type="text" name="subject" value="<?=$subject?>"> </span>
            </li>
            <li id="text_area">
                <span class="col1">내용 : </span>
                <span class="col2">
                    <textarea name="content"><?=$content?></textarea>
                </span>
            </li>
            <li>
                <span class="col1">첨부파일 : </span>
                <span class="col2"><?=$file_name?> </span>
            </li>

        </ul>
        <ul class="buttons">
            <li><button type="button" onclick="check_input()">수정하기</button></li>
            <li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
        </ul>
    </form>
    </div>
</section>
<footer>
	<?php include "footer.php";?>
</footer>
</body>
</html>