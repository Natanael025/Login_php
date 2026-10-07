<?php
session_start();
$con = mysqli_connect("localhost","root","","aulaphp");
$email = $_POST["email"];
$senha = $_POST["senha"];
$busca = mysqli_query($con,"SELECT * FROM aluno WHERE email='$email' AND senha='$senha'");
$contagem = mysqli_num_rows($busca);
if($contagem == 1){
    //fez login
    $_SESSION["logado"]=1;
    header("Location:logado.php");
}
else{
    // não fez login
    $_SESSION["logado"]=14;
    header("Location:logado.php");
}
?>