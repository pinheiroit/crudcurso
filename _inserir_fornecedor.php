<?php 

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];



$sql = "INSERT INTO fornecedor (fornecedor)  VALUES ('$fornecedor')";


$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:500px;margin-top:30px">
        <center>
        <h4>Fornecedor cadastrado com sucesso!</h4>
        </center>
        <div style="padding-top: 20px">
            <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo item</a>
            </center>
        </div>
</div>


?>