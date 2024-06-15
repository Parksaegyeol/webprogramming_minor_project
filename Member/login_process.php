<?php
//로그인창에서 post로 보낸 id랑 password를 db에 있는지 확인하고 있으면 게시판으로 이동 
//없으면 다시 하라고 하기


session_start();


$_SESSION['id']=$_POST['id'];
$_SESSION['password']=$_POST['password'];







$db=mysqli_connect("localhost", "root", "1234");

mysqli_select_db($db,'memsite');

$id=$_POST['id'];
$password=$_POST['password'];




//db에 해당 값 있는지 확인하고 true랑 false 반홚하는거 sql이랑 php로 어떻게 작성할꺼임????


$sql="SELECT*FROM member WHERE id='$id'";
$result=mysqli_query($db, $sql);
$row=mysqli_fetch_array($result);



if(!$row){

    echo "<script> 
    alert(\"일치하는 아이디가 없습니다.\");
    history.back();
    </script>";



}else{



if($row['password']==$password){
    echo "<script> 
    alert(\"로그인 성공!\");
    </script>";

header("location:index_login.php");
//로그인 성공시 임시페이지로 이동하게 해놨음 -> 메인페이지로 이동하도록 대체할 예정



}else{
    echo "<script>
    alert(\"비밀번호가 일치하지 않습니다.\");
    history.back();
</script>";

}


}



?>


