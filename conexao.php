<?php 
$usuario  = "root";
$senha    = "";
$url      = "localhost";
$database = "mural";

$conexao = mysqli_connect($url,$usuario,$senha,$database);
// teste github
if (!$conexao)
{ 
    echo ("Não conectou");
}
?>