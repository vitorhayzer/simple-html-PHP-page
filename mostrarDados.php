<?php
    // Validação antes de mostrar os dados
    if (empty($_POST['nome']) || strlen($_POST['nome']) < 2 || strlen($_POST['nome']) > 30) {
        echo "<h4>Preencha corretamente o campo nome (entre 2 e 30 caracteres)</h4>";
        die("Nome inválido");
        /*
        O comando die():
        - Para imediatamente a execução do script PHP.
        - Opcionalmente, exibe uma mensagem na tela (caso você passe uma string).
        - É equivalente a exit() — são a mesma função, só com nomes diferentes.
        */
    }
    else if (empty($_POST['idade']) || strlen($_POST['idade']) < 1 || strlen($_POST['idade']) > 3){
        echo "<h4>Preencha corretamente o campo idade (entre 1 e 3 caracteres)</h4>";
        die("idade inválida");
    }
    else if (empty($_POST['email']) || strlen($_POST['email']) < 4 || strlen($_POST['email']) > 50){
        echo "<h4>Preencha corretamente o campo email (entre 4 e 50 caracteres)</h4>";
        die("email inválido");
    }
    else if (empty($_POST['genero'])){
        echo "<h4>Preencha corretamente o campo genero</h4>";
        die("genero nao preenchido");
    }
    else if (empty($_POST['comentario']) || strlen($_POST['comentario']) <= 1 || strlen($_POST['comentario']) > 50){
        echo "<h4>Preencha corretamente o campo comentario (entre 1 e 200 caracteres)</h4>";
        die("comentario inválido");
    }
    

    if (isset($_POST['enviar'])) {
        //O comando isset() em PHP serve para verificar se uma variável foi definida e não é nula
        // enviar é o nome do botão Enviar, no arquivo aulaForm.php
        echo "<h3>Dados enviados: </h3>";
        echo "Nome: " . htmlspecialchars($_POST['nome']) . "<br>";
        // htmlspecialchars() para evitar XSS (códigos maliciosos no campo).
        echo "Idade: " . htmlspecialchars($_POST['idade']) . "<br>";
        echo "E-mail: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Gênero: " . htmlspecialchars($_POST['genero']) . "<br>";
        echo "Comentário: " . htmlspecialchars($_POST['comentario']) . "<br>";
        /*
        XSS (Cross-site Scripting) é uma vulnerabilidade de segurança em aplicações web
        que permite a injeção de scripts maliciosos em páginas visualizadas por outros usuários.
        Os atacantes aproveitam essa vulnerabilidade para injetar código, geralmente JavaScript,
        que é executado pelo navegador da vítima, permitindo-lhes comprometer a segurança
        da aplicação e do usuário
        */
    } else {
        echo "Nenhum dado foi enviado.";
    }
?>