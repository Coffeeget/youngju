<meta charset="utf-8">
<?php
   include "define.php";
   
   $id   = $_POST["id"];
   $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", DBuser, DBpass, DBname); 


   $sql = "select * from members where id='$id'";

   $result = mysqli_query($con, $sql); /*아이디 검색*/
  

   $num_match = mysqli_num_rows($result); /*레코드 개수 세기*/
   


   if(!$num_match) /*아이디 존재여부 판단.*/
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')  
             history.go(-1)
           </script>
         ");
    }
    else 
    {
        $row = mysqli_fetch_array($result); /*DB에서 비밀번호 가져오기 */
       
        $db_pass = $row["pass"];


        mysqli_close($con);

        if($pass != $db_pass) 
        {
           echo(" 
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit; //연결종료
        }
        else
        {
            session_start(); 
            $_SESSION["userid"] = $row["id"];      
            $_SESSION["username"] = $row["name"]; 
            $_SESSION["userlevel"] = $row["level"]; 
            $_SESSION["userpoint"] = $row["point"]; 
            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>