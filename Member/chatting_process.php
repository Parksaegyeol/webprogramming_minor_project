<?php
session_start();

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


//댓글 테이블 생성했고 댓글 입력했을떄 데이터베이스에 넣는거 처리하면됨 이제


$id=$_SESSION['id'];
$password=$_SESSION['password'];
$comment=$_POST['comment'];
$menu_id=$_SESSION['menu_id'];

// echo $id;
// echo '</br>';
// echo $password;
// echo '</br>';
// echo $comment;
// echo '</br>';
// echo $menu_id;


$query="INSERT INTO comment(menu_id, writer_id, writer_password, writer_comment)
VALUES($menu_id, '$id', '$password', '$comment')";

mysqli_query($db, $query);
//댓글 db에 넣는거까지 완료


header('Location:index_login.php');
//메인창으로 이동



?>