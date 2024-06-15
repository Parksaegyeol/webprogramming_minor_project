<?php


// echo $_SESSION['menu_id'];

$db=mysqli_connect("localhost", "root", "1234");
mysqli_select_db($db,'memsite');

$menu_id=$_SESSION['menu_id'];


$query="SELECT writer_id, writer_comment FROM comment 
WHERE menu_id=$menu_id";



$result=mysqli_query($db,$query);



?>


<div class="mt-3">



    
<table class="table">


<thead>
    <tr>
        <th></th>
        <th>ID</th>
        <th>COMMENT</th>
        
</tr>
</thead>
    <?php 
    $num=0;
    while ($row=mysqli_fetch_array($result)){ 
        $num++;
        
        ?>



<tr>
    <td><?php echo '댓글'?><?php echo $num?></td>
    <td><?php echo $row['writer_id'];?></td>
    <td><?php echo $row['writer_comment'];?></td>
    </tr>
    

    <?php 
    }?>
    </table>
    
    </div>
    