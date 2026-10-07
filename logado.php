<?php
session_start();
if($_SESSION["logado"] == 1){
    ?>
    <h1>LOGADO COM SUCESSO</h1>
    <br>
    <a href="logout.php">Sair</a>
    <?php
}
else{
    header('location:login.php');
}
?>