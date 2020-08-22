<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Crud Lindo</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
        #tamanhoContainer {
            width:500px;
        }
        #botao {
            background-color: #D53B7B;
            color:#ffff;
            font-weight:bold;
        }
</style>
</head>
<body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>Formulário de Cadastro</h4>
            <form action="_inserir_produto.php" method="post" style= "margin-top: 20px">
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira a descrição do produto" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                        <select class="form-control" name="categoria" required>
                            <?php 
                            include 'conexao.php';
                            $sql_categoria = " SELECT * FROM CATEGORIA ORDER BY CATEGORIA ASC";
                            $buscar_categoria = mysqli_query($conexao,$sql_categoria);

                            while ($array_categoria = mysqli_fetch_array($buscar_categoria)) {
                                $codcategoria = $array_categoria['codcategoria'];
                                $nome_categoria = $array_categoria['categoria'];

                                ?>
                            
                            
                       
                            <option><?php echo $nome_categoria ?></option>

                            <?php } ?>
                        </select>
                </div>

                <div class="form-group">
                    <label>Quantidade de Produto</label>
                    <input type="number" class="form-control" name="qtd" placeholder="Insira o quantidade de estoque" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <label>Fornecedor</label>
                        <select class="form-control" name="fornecedor" required>
                            <?php 
                            include 'conexao.php';
                            $sql_fornec = " SELECT * FROM fornecedor ORDER BY fornecedor ASC";
                            $buscar_fornec = mysqli_query($conexao,$sql_fornec);

                            while ($array_fornec = mysqli_fetch_array($buscar_fornec)) {
                            
                                $codfornec = $array_fornec['codfornec'];
                                $nome_fornecedor = $array_fornec['fornecedor'];
                                ?>
                            <option><?php echo $nome_fornecedor ?></option>
                            <?php } ?>
                        </select>
                </div>
                <div style="text-align:right;">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
                <a href="index.php" role = "button" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
            </div>
            </form>
        </div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>