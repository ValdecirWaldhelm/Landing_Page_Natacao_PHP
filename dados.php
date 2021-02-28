<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title></title>
</head>
<body>

<div id="formulario">
    <?php

    //Sessão start
    session_start();

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto'; 
    
    $name = isset($_POST["nome"])?$_POST["nome"]:"{ERRO}";
    $idade = isset($_POST["idade"])?$_POST["idade"]:"{ERRO}";

    //Validação formulário

    //Validação nome
    if(empty($name)){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!</br>Tente novamente!';
        header('Location: index.php#inscricao');
        return;
    }

    elseif(strlen($name) < 3){
        $_SESSION['mensagem-de-erro'] = 'O nome tem que possuir 3 caracteres válidos!</br>Tente novamente!';
        header('Location: index.php#inscricao');
        return;
    }
    elseif(strlen($name) > 40){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode possuir mais de 40 caracteres!</br>Tente novamente!';
        header('Location: index.php#inscricao');
        return;
    }

    //Validação idade
    elseif(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia!</br>Tente novamente!';
        header('Location: index.php#inscricao');
        return;
    };

    // Função categoria natação
    if($idade >= 6 && $idade <= 12){
        
            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'infantil'){
                    $_SESSION['mensagem-de-sucesso'] = "O nadador ".$name. " compete na categoria Infantil";
                    header('Location: index.php#inscricao');
                    return;
                };
            };  

        }elseif($idade >= 13 && $idade <= 18){
            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'adolescente'){
                    $_SESSION['mensagem-de-sucesso'] = "O nadador ".$name. " compete na categoria Adolescente";
                    header('Location: index.php#inscricao');
                    return;
                };
            }; 
            
        }elseif($idade > 18){
            for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'adulto'){
                    $_SESSION['mensagem-de-sucesso'] = "O nadador ".$name. " compete na categoria Adulto";
                    header('Location: index.php#inscricao');
                    return;
                };
            }; 

        };

            
   
    ?>
    <br>
    <a href="index.php"><input type="submit" value="Voltar"></a>
</div>

</body>
</html>



