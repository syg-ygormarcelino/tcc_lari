<?php
    session_start();
    include('../model/database.php');

    $email = $_POST['email'];
    $senha     = $_POST['senha'];
    
    $admin_select       = "select id from tb_admin where email = '$email' and senha = md5('$senha')";
    $aluno_select       = "select id from tb_aluno where email = '$email' and senha = md5('$senha')";
    $professor_select   = "select id from tb_professor where email = '$email' and senha = md5('$senha')";
    $responsavel_select = "select id from tb_responsavel where email = '$email' and senha = md5('$senha')";



    $adm_query         = mysqli_query($connection, $admin_select);
    $aluno_query       = mysqli_query($connection, $aluno_select);
    $professor_query   = mysqli_query($connection, $professor_select);
    $responsavel_query = mysqli_query($connection, $responsavel_select);

    if(mysqli_num_rows($adm_query) > 0){
       
        $_SESSION['session'] = $email;
        header('Location: ../view/home-adm.php');
        exit();
        
    }else if(mysqli_num_rows($aluno_query) > 0){
       
        $_SESSION['session'] = $email;
        header('Location: ../view/home-aluno.php');
        exit();
        
    }else if(mysqli_num_rows($professor_query) > 0){
       
        $_SESSION['session'] = $email;
        header('Location: ../view/home-professor.php');
        exit();
        
    }else if(mysqli_num_rows($responsavel_query) > 0){
       
        $_SESSION['session'] = $email;
        header('Location: ../view/home-responsavel.php');
        exit();
        
    }
    
    
    
    else{

        echo "Dados de login incorretos";

    }

    