<?php

  $x = array_rand($_POST);
    for ($z=1; $z<$_SESSION['jogadores']; $z++){
    if($x == $z){

    echo "<h1>O Jogador $x; foi o Vencedor com $_POST[$x]; pontos"
   }
 
 }  

?>

<?php

/*

Achou que ganharia aquele que colocou o maior ou o menor número??? Errado! Esse jogo é trapaceiro.

Um jogador ganhará aleatoriamente. Como faremos isso?

Veja, esse arquivo está passando para você dados via POST. Nosso vetor chegará mais ou menos assim nesse arquivo:

$_POST[jogador] = pontos

Claro, se tudo foi implementado corretamente nos passos anteriores!

Se quiser testar e ver a estrutura do $_POST que chega nesse arquivo, você pode experimentar:

var_dump($_POST);die; // Irá exibir o nosso Array

Sua missão nesse arquivo é exibir a seguinte String:

<h1>O Jogador X foi o Vencedor com Y pontos</h1>

Onde o X é a chave do jogador no Array $_POST e Y é a quantidade de pontos desse jogador.

E como escolheremos o vencedor aleatoriamente? Bom... essa é a sua missão! Ache uma forma de escolher um valor no Array aleatoriamente.

  Dica: Pense no que você quer... para buscar no Google. O que você quer fazer? Não desanime! A resposta para esse nosso problema está no https://secure.php.net

1 - Escolha algum jogador aleatoriamente no Array do POST para ser o Vencedor

2 - Imprima a seguinte String:

<h1>O Jogador X foi o Vencedor com Y pontos</h1>

  Dica: Lembre-se que você usará o poder da Concatenação de String
