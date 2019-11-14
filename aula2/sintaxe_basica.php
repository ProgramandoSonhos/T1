<?php
// ----------------- Comentarios --------------
// Ola eu sou um comentario
/* e eu sou um comentario de 
   multiplas linhas! */
# eu também sou um comentario!
echo "<!-- Oi, eu sou um comentario HTML -->";
// ------------- Tipos primitivos --------------
// boolean
$variavel = false;
echo $variavel.": ".gettype($variavel)."<br>";
// string
$variavel = "false";
echo $variavel.": ".gettype($variavel)."<br>";
// integer
$variavel = 100;
echo $variavel.": ".gettype($variavel)."<br>";
// double
$variavel = 22/7;
echo $variavel.": ".gettype($variavel)."<br>";
// ------------- Tipos compostos -------------
$variavel = array(10, 20, 60, 'oi mundo!');
print_r($variavel);
echo "<br>";
$variavel = [0, 20, 40, 10.5, true];
var_dump($variavel);
echo "<br>";
$variavel = ["NOME" => "Cecilia", "IDADE" => 34, "ALTURA" => 1.58];
var_dump($variavel);
echo "<br>";
class Objeto {
  public $nome = "Cecilia";
  public $idade = 34;
  public $altura = 1.58;
}
$variavel = new Objeto();
var_dump($variavel);
echo "<br>";
// ------------- Tipos especiais -------------
// resource
// null
$variavel = null;
var_dump($variavel);
echo "<br>";
// ------------- Funções de print -------------
echo "string um texto <br>";
print "string um texto <br>";
// echo [5, 2 ,3]; //não funciona!
print_r([5, 2, 3]);
print_r("<br>testando print_r com string");
print('<br>');
var_dump([5, 2, 3, 5.8, false, 'string']);
echo "<br><br><br><a href='sintaxe_basica2.php'>Página 2 >> </a>";
