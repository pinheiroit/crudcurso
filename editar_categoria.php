<?php 

include 'conexao.php';

$codcategoria = $_GET['codcategoria'];


?>

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
        <h4>Edição da Categoria</h4>
            <form action="_atualizar_categoria.php" method="post" style= "margin-top: 20px">

                        <?php 
                        $sql = "SELECT * FROM `categoria` where codcategoria = $codcategoria";
                        $buscar = mysqli_query($conexao,$sql);
                        while($array = mysqli_fetch_array($buscar)) {
                         
                        
                            $codcategoria =     $array['codcategoria'];
                            $categoria = $array['categoria'];
                        ?>
                <div class="form-group">
                    <label>Código da Categoria</label>
                    <input type="number" class="form-control" name="codcategoria" value = "<?php echo $codcategoria ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">
                </div>
                <div style="text-align:right;">
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
                        <?php } ?>
            </form>
        </div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>