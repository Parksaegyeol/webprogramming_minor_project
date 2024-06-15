<?php


if(!isset($_POST['chk']) or $_POST['chk']!=1 ){
//     die("<script>

// alert('약관 등을 동의하시고 접근하시기 바랍니다. );
// self.location.href='./stipulation.php';

// </script>");
}
$js_array=['js/mypage.js'];

include 'inc_header.php';
?>





<form class="w-50 mx-auto border rounded-5 p-5" action="member_input_process.php", method="post">

<h1 class="text-center">회원가입</h1>


<div class="d-flex">
    <div class="flex-grow-1">
    <label for="f_id">아이디</label>
    <input type="text"name="id"  class="form-control" id="f_id"  placeholder="아이디를 입력해 주세요.">
    
  </div>

</div>



<div class="d-flex mt-3 gap-2 justify-content-between" >
    <div class="flex-grow-1">
    <label for="f_password" class="form-label">비밀번호</label>
    <input type="password" name="password" class="form-control" id="f_password"  placeholder="비밀번호를 입력해 주세요.">
    </div>


</div>



<div class="d-flex mt-3 gap-2 align-items-end" >
    <div class="flex-grow-1">
    <label for="f_email" class="form-label">이메일</label>
    <input type="text"name="email"  class="form-control" id="f_email"  placeholder="이메일을 입력해 주세요.">
    
  </div>

</div>









<div class="mt-3 d-flex gap-5">
<div>
    <label for="f_photo" class="form-label">프로필이미지</label>_
    <input type="file" name="profile" id="f_photo" class="form-control">
    

</div>
<img src="images/person.jpg" id="f_preview" class="w-25" alt="profile image"/>
 
</div>




<div class="mt-3 d-flex gap-2">
    <button class="btn btn-primary w-50">가입</button>
    <button class="btn btn-secondary w-50">취소</button>
</div>





</form>

<?php

include 'inc_footer.php';


?>
