<?php

include 'conexao.php';

$nomeproduto = $_POST['nomeproduto'];
$categoria =   $_POST['categoria'];
$qtd =         $_POST['qtd'];
$fornecedor=   $_POST['fornecedor'];

$sql = "INSERT INTO `produto` (`nomeproduto`, `categoria`, `qtd`, `fornecedor`) VALUES ('$nomeproduto','$categoria',$qtd,'$fornecedor')";


$inserir = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:500px;margin-top:30px">
        <center>
        <h4>Produto Adicionado com sucesso!</h4>
        </center>
        <div style="padding-top: 20px">
            <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo item</a>
            </center>
        </div>
</div>