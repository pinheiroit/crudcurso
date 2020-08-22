<?php

include 'conexao.php';

$codprod = $_POST['codprod'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$fornecedor = $_POST['fornecedor'];

$sql = "update `produto` set `codprod`='$codprod',`nomeproduto`='$nomeproduto',`categoria`='$categoria',`qtd`=$qtd,`fornecedor`='$fornecedor'
 where codprod = $codprod";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:400px">
    <center>
            <h3>Atualizado com Sucesso</h3>
            <div style="margin_top=10px">
            <a href="listar_produto.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
            </div>
    </center>
