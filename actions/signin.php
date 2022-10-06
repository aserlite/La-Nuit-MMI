<?php
$tmp=[];
if(isset($_POST['tmp'])){
    $tmp['eror']=$_POST['tmp'];
}

echo $blade->make("signin",array("tmp" => $tmp))->render();
?>