<?php
if(isset($_SESSION["id"])){
echo $blade->make("publication")->render();
}
else{
    header('Location: index.php');
  }
?>