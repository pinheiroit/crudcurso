<?php
$servername = "localhost";//padrão - server local
$database = "curso_estoque"; //nome do banco
$username = "root";// padrão -root
$password = ""; // senha de conexão com o banco de dados
//Create Conexão
$conexao = mysqli_connect($servername,$username,$password,$database);