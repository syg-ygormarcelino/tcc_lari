<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<br>
<!-- <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro-aluno">Cadastrar aluno</a>
<br>
<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro-professor">Cadastrar professor</a>
<br>
<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro-responsavel">Cadastrar responsável</a>
<br>
<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro-administrador">Cadastrar administrador</a>
<br> -->
<a class="btn btn-danger" href="../controller/logout.php">Sair</a>



<script>

</script>

<form action="../controller/cadastro.php" method="post">
    <h1>Cadastro de usuario</h1>
    <br>
    Nome
    <input type="text" name="nome" id="">
    <br>
    Tipo
    <select name="tipo" id="tipo">
        <option value="a">Aluno</option>
        <option value="p">Professor</option>
        <option value="r">Responsável</option>
        <option value="adm">Administrador</option>
    </select>
    <br>
    E-Mail
    <input type="email" name="email" id="email">
    <br>
    CPF
    <input type="text" name="cpf" id="cpf">
    <br>
    <div id="div_matricula">
        Senha
        <input type="password" name="senha" id="senha">
    </div>
    <br>
    <div id="div_cpf_responsavel">
        CPF do Responsável
        <input type="text" name="cpf_responsavel" id="cpf_responsavel">
    </div>
    <br>
    <input type="submit" value="Cadastrar" name="cadastro_usuario">

</form>

<form action="../controller/adiciona-disciplina.php" method="post">
    <h1>Cadastro de disciplinas</h1>
    <br>
    Nome
    <input type="text" name="nome_disciplina" id="">
    
    <br>
    Imagem
    <input type="file" name="imagem_disciplina" id="imagem_disciplina">
    <br>
    Chave de acesso
    <input type="text" name="chave_acesso" id="chave_acesso">
    <br>
    <select name="professor" id="professor">
        
    </select>
    <br>
    <input type="submit" value="Cadastrar">

</form>

<script>

    $('#tipo').change(function(){

        if($('#tipo').val() == 'p'){
            $('#div_cpf_responsavel').hide();
            $('#div_matricula').show();
        }

        if($('#tipo').val() == 'r'){
            $('#div_cpf_responsavel').hide();
            $('#div_matricula').hide();
        }

        if($('#tipo').val() == 'adm'){
            $('#div_cpf_responsavel').hide();
            $('#div_matricula').hide();
        }

        if($('#tipo').val() == 'a'){
            $('#div_cpf_responsavel').show();
            $('#div_matricula').show();
        }

    });

</script>