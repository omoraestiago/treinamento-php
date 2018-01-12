<?php
session_start();

require_once 'funcaoCheck.php';
  
    $jogadores = $_GET['jogadores'];
    
    if(analise($jogadores)){
        header("Location: coluna.php?jogadores=$jogadores");
    }else{
        header("Location: config.php?jogadores=$jogadores");
    }
 ?>

<?php
/*

1 - Uttilize o "require_once" para importar o arquivo "funcaoCheck.php".

2 - Depois de definida a Função, passe para o código o seguinte pseudo-código:

  "Se analise($_GET['jogadores']) é verdadeiro então redirecione para a página coluna.php
   com o valor "$_GET['jogadores']" via GET, caso contrário, redirecione para a página config.php
   com o mesmo valor via GET".

  Dica: Como passaríamos dados via GET em um redirecionamento? Fácil!

  Sabemos como redirecionar para a página home.php,
  Mas para passar um valor chamado "user" setado "Info", redirecionaríamos para a mesma página com uma URL diferente:

  "home.php?user=Info"

  E se o nome de Usuario tivesse em outra variável? Podemos concatenar a String com a Variável, criando a nossa URL!

  "home.php?user=" . $user

  */
?>
