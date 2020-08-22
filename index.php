<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tela de Login</title>
    <style type="text/css">
    #tamanho {
        margin-top: 60px;
        width: 300px;
        -webkit-box-shadow: 10px 10px 30px -12px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 30px -12px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 30px -12px rgba(0, 0, 0, 0.75);
    }
    </style>

</head>

<body>
    <div class="container" id="tamanho" style="border-radius:15px;border: solid 2px #f3f3f3;">
        <div style="padding:10px;" <form>
            <center>
                <img src="Img/cadeado.png" width="120px" height="110px">
            </center>
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Informe seu usuário"
                    autocomplete="off" required>
                <div class="form-group" style="margin-top:10px;">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Informe sua senha"
                        autocomplete="off" required>
                    <div style="text-align: center;">
                        <button style="margin-top:20px;" type="submit" class="btn btn-success">Entrar</button>
                    </div>
                </div>
            </div>
            </form>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

</html>