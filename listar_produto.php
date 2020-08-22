<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/50472f3a79.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top:40px;">
<center>
<h3>Lista de Produtos</h3>
</center>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código do Produto</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Estoque</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        <?php
            include 'conexao.php';
            $sql = "select * from `produto`";
            $buscar = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $codprod =     $array['codprod'];
                $nomeproduto = $array['nomeproduto'];
                $categoria =   $array['categoria'];
                $qtd =         $array['qtd'];
                $fornecedor =  $array['fornecedor'];
      ?>
      <tr>
        <td><?php echo $codprod ?></td>
        <td><?php echo $nomeproduto ?></td>
        <td><?php echo $categoria ?></td>
        <td><?php echo $qtd ?></td>
        <td><?php echo $fornecedor ?></td>
        <td><a class="btn btn-warning btn-sm" style="color:#fff;font-weight:bold" href="editar_produto.php?codprod=<?php echo $codprod ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>
        <td><a class="btn btn-danger btn-sm" style="color:#fff;font-weight:bold" href="deletar_produto.php?codprod=<?php echo $codprod ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a></td>
            
        <?php } ?>
    
    </tr>
  </tbody>
</table>
<div style="text-align:right;">
<a href="index.php" role="button" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
<a href="#" class="btn btn-sm btn-warning" style="color:#fff">Imprimir</a>
<a href="#" class="btn btn-sm btn-danger" style="color:#fff">Exportar</a>


</div>        


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>