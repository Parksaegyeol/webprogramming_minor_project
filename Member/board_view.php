<?php 

session_start();
//그니까 로그인이 성공이 됬든 안됬든 login_process.php에서 로그인 창에 입력한
//값들로 세션 id랑 password값을 초기화함 

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (isset($g_title) && $g_title != '') ? $g_title : ''; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</head>

<?php include 'inc_header_login.php';?>


<!-- <?php echo $_SESSION['id'];
echo '</br>';
echo $_SESSION['password'];
echo '</br>';
echo $_GET['menu_id'];
echo '</br>';

$_SESSION['menu_id']=$_GET['menu_id'];


?> -->


<?php

$db=mysqli_connect("localhost", "root", "1234");

mysqli_select_db($db,'memsite');




//댓글 관련 정보 저장할 테이블 생성

$query="CREATE TABLE IF NOT EXISTS comment (
    id INT NOT NULL AUTO_INCREMENT,
    menu_id INT NOT NULL,
    writer_id VARCHAR(45) NOT NULL,
    writer_password VARCHAR(45) NOT NULL,
    writer_comment VARCHAR(300) NULL,
    
    
    PRIMARY KEY (id) )ENGINE=MyISAM;
";

mysqli_query($db, $query);


?>







<main class="mx-auto border rounded-2 p-5 d-flex gap-5" style="height:calc(100vh-257px)">
<img style="margin-left:auto; margin-right:auto;width:30%;" src="images\메뉴<?=$_GET['menu_id']?>.jpg" alt="">
</main>



<div class="rounded-2 d-flex" >
<button class="btn btn-primary"style="margin-left:auto; margin-right:10px; width:125px; height:100px; border-radius:50%;" 
 type="button" onclick="window.location.href='like.php'">좋아요</button>
<button class="btn btn-danger" style="margin-left:10px; margin-right:auto; width:125px; height:100px; border-radius:50%;" 
 type="button" onclick="window.location.href='unlike.php'">싫어요</button>
</div>



<?php include 'chatting_list.php'?>




<?php include 'chatting.php';?>





    <?php include 'inc_footer.php';?>
    