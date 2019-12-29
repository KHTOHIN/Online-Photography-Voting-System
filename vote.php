<?php 
require './connect.php';
if($_POST['serial']==='1'){
    $uid=intval($_POST['uid']);
    $pid=intval($_POST['pid']);
    $sql="select * from vote where uid= $uid and pid = $pid";
    $r=mysqli_query($link,$sql);
    if(mysqli_num_rows($r)>0){
        echo "Already voted. Can't vote for the same image twice";
    }
    else{
        $sql="insert into vote (pid,uid) values ($pid , $uid)";
        if(mysqli_query($link,$sql)){
            echo "Vote counted successfully";
        }else {
            echo mysqli_error($link);
        }        
    }
}
?>