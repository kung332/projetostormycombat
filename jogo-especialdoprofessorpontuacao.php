<?php
// Recebe os dados do POST
$score1 = isset($_POST['score1']) ? $_POST['score1'] : '';
$score2 = isset($_POST['score2']) ? $_POST['score2'] : '';
$nome1 = isset($_POST['nome1']) ? $_POST['nome1'] : '';
$nome2 = isset($_POST['nome2']) ? $_POST['nome2'] : '';

// Monta a string a ser salva no arquivo
$dados = "Score1: $score1\nScore2: $score2\nNome1: $nome1\nNome2: $nome2\n";

// Caminho do arquivo txt
$arquivo = 'jogo-especialdoprofessorquadros.txt';

// Abre o arquivo em modo de escrita
$file = fopen($arquivo, 'w');

// Escreve os dados no arquivo
fwrite($file, $dados);

// Fecha o arquivo
fclose($file);
?>