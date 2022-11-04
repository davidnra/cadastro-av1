<?php
    $conn = mysqli_connect("127.0.0.1", "root", "") or die ("falha na coexão!");    //servidor, usuário, senha

    mysqli_select_db($conn, 'cadastro1');                                             //base de dados

?>