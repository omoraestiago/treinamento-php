<?php

session_start();

function analise ($jogadores) {

          if ( $jogadores > 10 ){
            
            return false;
          
          } else {
            
            return true;
          }
        }
  
?>

<?php      
/*
    1 - Crie uma Função "analise" que recebe uma variável.

      Dica: Funções em php têm esse tipo de estrutura:

        function retornaVariavel ($entrada) {

          if ( $entrada == 0 ) {
            return 0;
          } else {
            return $entrada;
          }
        }

        Mais detelhes em: https://secure.php.net/manual/pt_BR/language.functions.php

    2 - Se a variável passada para função "analise" for maior que 10, a função deve retornar "false", caso contrário "true".
*/
?>