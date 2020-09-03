<?php
    require_once 'classe.php';
    $u = new usuario();
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        
        <nav>
       
        <h2>NOSSO JEITO</h2>
            <div class="logo">
                <img src="1.jpg"  width="70  " height="70"  alt="Logo" />
            </div>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="cadastro.html">Cadastro</a>
                </li>                
                <li>
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <div>
        <?php

            session_start();            
            if(!isset($_SESSION['ID'])){
                echo "<br>";
                echo "<span id='pode'>Formulario Enviado Com Sucesso</span> Acessar Nosso Formulário de Requisição.<br>";
                echo "Para Ter Acesso Faça o Login Agora:";
                echo "<br><a href='index.php'><button>Enviar Outro</button></a>";
                echo "Caso não Tenha Cadastro Clique no Botão Abaixo e Cadastre-se já: <a href='cadastro.html'><button>Cadastra-se</button></a> ";
            }else{   
                echo "<span id='pode'>Formulario Enviado Com Sucesso</span>";             
                echo "Obrigado, ".$_SESSION['ID']." <br/>  O Grupo Nosso Jeito Agradesce a Preferência!<br>";
                echo " <br>Caso Queira Enviar Novamente Clique Abaixo:<a href='index.php'><button>Enviar Outro</button></a> <br>";
                echo "OU se Caso Tenha Terminado e so Clicar em SAIR: <a href='sair.php'><button>SAIR</button></a>";
                echo "Duvidas Envie Um E-mail Para nossojeitooficial@gmail.com que Responderemos o Mais Rápido Possivél! ";
               
                }
            
            ?>
        </div>

        <?php
            include 'footer.php'
        ?>

    </body>
    </html>