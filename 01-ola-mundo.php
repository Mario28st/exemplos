<!doctype html>
 <html>
 <head>
 <link r e l=" stylesheet " href=" css/e s t i l o . css ">
 <meta charset="UTF−8">
 <title>Minha página com PHP!</title>
 <link rel="stylesheet" href="css/estilo.css">
 </head>
 <body>


 <h1> echo "Minha página PHP! " ; </h1>
 <?php
echo "Oi, Esta 1ª linha será impressa na tela";
// Esta linha não! Elá é apenas um comentário.
echo "</br>";
echo "Olá, Esta 2ª linha também será apresentada na tela";
# Esta linha não será exibida! Ela também é um comentário.
echo "</br>";
echo "Esta linha também aparecerá no seu monitor";
/* Esta aqui não aparecerá na sua tela porque também
será considerada um comentário */
echo "</br>";
$nome = "Douglas";
$idade = 38;
echo $nome; // vai aparecer Douglas na tela
echo "</br>"; // sim, podemos informar uma tag html como saída
echo $idade; // vai aparecer 38 na tela
echo "</br>";
$nome = "Douglas"; // strings devem sempre estar entre aspas
$sobrenome = "Nunes";
echo $nome . $sobrenome; // vai aparecer DouglasNunes na tela
echo "</br>";
echo $nome . " ". $sobrenome; // vai aparecer Douglas Nunes na tela
echo "</br>";
echo strlen($nome); // vai aparecer 7 na tela
echo "</br>";
$a = 6;
$b = 3;
$c = $a * $b; // resultado é 18
$d = $a + $b; // resultado é 9
$e = $c - $d; // resultado é 9
$f = $a / $b; // resultado é 2
$g = $c % $d; // resultado é 0
$a = 1; // A variável $a é igual a 1
$a += 2; // Somamos 2 ao valor da $a. É equivalente a: $a = $a + 2;
$a -= 2; // Subtraímos 2 ao valor da $a. É equivalente a: $a = $a - 2;
$a *= 2; // Multiplicamos o valor da variável $a por 2;
$a /= 2; // Dividimos o valor da variável $a por 2.
$a = 1; // A variável $a é igual a 1
echo ++$a; // Incrementamos 1 e retornamos o valor
echo "</br>";
echo $a++; // Retornamos o valor e incrementamos 1
echo "</br>";
echo --$a; // Decrementamos 1 e retornamos o valor
echo "</br>";
echo $a--; // Retornamos o valor e decrementamos 1
echo "</br>";
$a = 1; // A variável $a é igual a 1
$b = 2; // A variável $b é igual a 2
echo $a == $b; // verifica se $a é igual a $b e retorna true ou false
echo "</br>";
echo $a != $b; // verifica se $a é diferente de $b e retorna true ou false
echo "</br>";
echo $a > $b; // verifica se $a é maior que $b e retorna true ou false
echo "</br>";
echo $a >= $b; // verifica se $a é maior ou igual a $b e retorna true ou false
echo "</br>";
$idade = 17;
if($idade < 18) {
echo 'Entrada permitida somente para maiores de 18 anos!';
echo "</br>";
} else {
echo 'Seja bem–vindo!';
echo "</br>";
}

$idade = 17;
if($idade < 18 && $idade > 16) {
echo "Seu voto é facultativo!";
echo "</br>";
} else if ($idade > 70){
echo "Seu voto é facultativo";
echo "</br>";
} else {
echo "Seu voto é obrigatório!";
echo "</br>";
}
$nome = 'Fulano';
switch($nome) {
case 'Fulano':
echo 'E ai Fulano!';
echo "</br>";
break;
case 'Sicrano':
echo 'E ai Sicrano!';
echo "</br>";
break;
default:
echo 'Qual é o seu nome?';
echo "</br>";
break;
}
$codigo = 2;
switch($codigo) {
case 1:
echo "O código é 1!";
echo "</br>";
break;
case 2:
echo "O código é 2";
echo "</br>";
break;
default:
echo "Código não identificado";
echo "</br>";
break;
}

?>
</body>
 </html>