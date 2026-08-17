<?php
//Código para processar o cadastro
$nome = $_POST['nome1']; //Armazenamento da variável 'nome'
$idade = $_POST['idade2']; //Armazenamento da variável 'idade'
$profissao = $_POST['profissao3']; //Armazenamento da variável 'profissão'
$salario = $_POST['salario4']; //Armazenamento da variável 'salário'
$experiencia = $_POST['experiencia5']; //Armazenamento da variável 'experiência'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Lojas Brincos e Companhia</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 18px;
        background-color: rgba(184, 155, 94, 0.3);
    }
    main {
        width: 550px;
        padding: 40px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        font-size: 30px;
        margin-top: 0;
        margin-bottom: 40px;
    }
    p {
        margin-top: 0;
        margin-bottom: 20px;
        line-height: 1.5;
    }   
    .mensagem {
        margin-top: 30px;
        padding: 20px;
        background-color: rgba(184, 155, 94, 0.15);
        border-left: 4px solid #b89b5e;
        border-radius: 5px;
    }
    #voltar {
        display: block;
        width: 100%;
        box-sizing: border-box;
        margin-top: 30px;
        padding: 11px;
        background-color: #b89b5e;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        font-size: 18px;
    }
    #voltar:hover {
        background-color: #9f8349;
    }
</style>
</head>
<body>
    <main>
        <h1>CADASTRO REALIZADO COM SUCESSO!</h1>
        <p>NOME COMPLETO: <?php echo $nome; ?></p>
        <p>IDADE: <?php echo $idade; ?></p>
        <p>PROFISSÃO: <?php echo $profissao; ?></p>
        <p>SALÁRIO PRETENDIDO: R$ <?php echo $salario; ?></p>
        <p>EXPERIÊNCIA ANTERIOR: <?php echo $experiencia; ?></p>
            <div class="mensagem">
                <p>Olá, <?php echo $nome; ?>! Recebemos seu cadastro para a profissão de <?php echo $profissao; ?>. Sua experiência anterior, descrita como <?php echo $experiencia; ?>, foi registrada com sucesso.</p></div>
            <a href="cadastro.html" id="voltar">VOLTAR AO FORMULÁRIO</a>
    </main>
</body>
</html>