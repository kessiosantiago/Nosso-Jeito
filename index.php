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
                echo "Bem-Vindo, Convidado <br>";
                echo "Por Equanto Você <span id='naopode'>NÃO PODE</span> Acessar Nosso Formulário de Requisição.<br>";
                echo "Para Ter Acesso Faça o Login Agora:";
                echo "<br><a href='login.html'><button>Login</button></a>";
                echo "Caso não Tenha Cadastro Clique no Botão Abaixo e Cadastre-se já: <a href='cadastro.html'><button>Cadastra-se</button></a> <br> ";
            }else{                
                echo "Seja Bem-Vindo, ".$_SESSION['ID']." <br />";
                echo "<span id='pode'> Agora Você Está Logado</span>";
                echo ' Falat so Preencher o Formulario Abaixo Para Solicitar Seu Show!
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                
                  <form action="insere.php" method="POST" >
                    <div class="form-group">
                      <label for="nome"> Nome completo </label>
                      <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                      <label for="data-toggle">Local</label>
                      <input type="text" class="form-control"  name="local">
                    </div>  
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email"
                      name="email" placeholder="email@exemplo.com" required>
                    </div>
                    <div class="form-group">
                      <label for="cpf">CPF</label>
                      <input type="text" class="form-control" id="cpf" placeholder="XXX.XXX.XXX-XX" name="cpf">
                    </div>
                    <div class="form-group">
                      <label for="inputFone" class="control-label">Telefone</label>
                      <input type="text" class="form-control" name="telefone" placeholder="(88)9.9999-9999" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="ENVIAR" onclick="redireciona()"/>
                    
                  </form>
                  </div>
                  
                  <div class="modal-footer">
                <br>
                    
                  </div>
                </div>
              </div>
              <script>
                    function redireciona(){
                        window.location.href="/sistema_de_pedido/retorno.php";
                    
                    }
                    </script>
                   ';
                    echo "Duvidas envie e-mail para nossojeitooficial@gmail.com";
                    echo "<a href='sair.php'><button>SAIR</button></a>";
                }
            
            ?>
        </div>

        <?php
            include 'footer.php'
        ?>

    </body>
    </html>