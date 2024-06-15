<?php 
session_start();

$id=$_SESSION['id'];
$password=$_SESSION['password'];



$db=mysqli_connect("localhost", "root", "1234");

mysqli_select_db($db,'memsite');

$query="SELECT email FROM member WHERE id='$id' AND password='$password'";
$result=mysqli_query($db, $query);
$row=mysqli_fetch_array($result);
$email=$row['email'];




$query="SELECT zipcod FROM member WHERE id='$id' AND password='$password'";
$result=mysqli_query($db, $query);
$row=mysqli_fetch_array($result);
$zipcod=$row['zipcod'];

// echo $id;
// echo '</br>';
// echo $password;
// echo '</br>';
// echo $email;
// echo '</br>';
// echo $zipcod;
// echo '</br>';

$js_array=['js/mypage.js'];


?>



<?php

include 'inc_header_login.php';


?>





<form class="w-50 mx-auto border rounded-5 p-5" action="edit_process.php", method="post">

<h1 class="text-center">내정보</h1>


<div class="d-flex">
    <div class="flex-grow-1">
    <label for="f_id">아이디</label>
    <input type="text"name="id"  class="form-control" id="f_id"  placeholder="<?=$id?>">
    
  </div>

</div>



<div class="d-flex mt-3 gap-2 justify-content-between" >
    <div class="flex-grow-1">
    <label for="f_password" class="form-label">비밀번호</label>
    <input type="password" name="password" class="form-control" id="f_password"  placeholder="<?=$password?>">
    </div>


</div>



<div class="d-flex mt-3 gap-2 align-items-end" >
    <div class="flex-grow-1">
    <label for="f_email" class="form-label">이메일</label>
    <input type="text"name="email"  class="form-control" id="f_email"  placeholder="<?=$email?>">
    
  </div>

</div>









<div class="mt-3 d-flex gap-5">
<div>
    <label for="f_photo" class="form-label">프로필이미지</label>_
    <input type="file" name="profile" id="f_photo" class="form-control">
    

</div>
<img src="<?=$zipcod?>" id="f_preview" class="w-25" alt="profile image"/>
 
</div>




<div class="mt-3 d-flex gap-2">
    <button class="btn btn-primary w-50">수정</button>
    <button class="btn btn-secondary w-50">취소</button>
</div>





</form>

<?php

include 'inc_footer.php';


?>
