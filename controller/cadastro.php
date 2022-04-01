<?php

include('../model/database.php');

if($_POST['tipo'] == 'a'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = md5($_POST['senha']);
    $matricula = random_bytes(6);
    $cpf_responsavel = $_POST['cpf_responsavel'];

    $verify_select = "select id from tb_responsavel where cpf = '$cpf_responsavel'";
    $verify_query = mysqli_query($connection, $verify_select);

    if(mysqli_num_rows($verify_query) > 0){
        while($verify_row = mysqli_fetch_array($verify_query)){
            $id = $verify_row["id"]; 
        }

        $insert = "insert tb_aluno (nome,email,cpf,senha,matricula,id_responsavel) values ('$nome','$email','$cpf','$senha','$matricula','$id');";

        $query = mysqli_query($connection, $insert);
        
    }else{
        echo 'Reponsável não cadastrado';
    }

}else if($_POST['tipo'] == 'p'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = md5($_POST['senha']);
    $matricula =  uniqid('');

    $insert = "insert tb_professor (nome,email,cpf,senha,matricula) values ('$nome','$email','$cpf','$senha','$matricula');";

    $query = mysqli_query($connection, $insert);

    

}else if($_POST['tipo'] == 'r'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = md5($_POST['senha']);

    $insert = "insert tb_responsavel (nome,email,cpf,senha) values ('$nome','$email','$cpf','$senha');";

    $query = mysqli_query($connection, $insert);


}else if($_POST['tipo'] == 'adm'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = md5($_POST['senha']);

    $insert = "insert tb_admin (nome,email,cpf,senha) values ('$nome','$email','$cpf','$senha');";

    $query = mysqli_query($connection, $insert);

}

?>