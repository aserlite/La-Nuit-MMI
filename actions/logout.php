<?php
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    unset($_SESSION['id']);

    header('Location: index.php');
}else{
    header('Location: index.php');
}
?>

