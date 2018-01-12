<?php

session_start();

function escreverInput($w){

   for($z=1; $z<=$w; $z++){
     <label for="jogador"<?php echo $z;?> > jogador <?php echo $z; ?> </label> 
     <input type="text" name="<?php echo $z; ?>" id="jogador <?php echo $z; ?>"><br> 

   }
}

?>


<?php

 /*

 1 - Faça uma função chamada "escreveInput" que recebe um valor como parâmetro, e não retorna nada.

  A função deve escrever o seguinte trecho de HTML:

    <label for="jogadorX">Jogador X</label>
    <input type="text" name="X" id="jogadorX"><br>

  Veja que tem a letra X, essa letra X deve ser substituida por uma variavel em PHP.

  O objetivo dessa função é recebido o número 3 como parâmetro, ela deve imprimir 3x a string acima,
  onde o X vai de 1 a 3. O resultado final depos da chamada da função seria isso:

  <label for="jogador1">Jogador 1</label>
  <input type="text" name="1" id="jogador1"><br>
  <label for="jogador2">Jogador 2</label>
  <input type="text" name="2" id="jogador2"><br>
  <label for="jogador3">Jogador 3</label>
  <input type="text" name="3" id="jogador3"><br>

  Dica: Provavelmente você usará alguma estrutura de repetição nessa tarefa e o recurso de concatenação de Strings.
