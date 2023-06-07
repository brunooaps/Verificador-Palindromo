<?php
function verificarPalindromo($palavra) {
  // Remove espaços, pontuações e sinais, e converte para minúsculas
  $palavra = strtolower(str_replace(array(',','.','-','/', '?', '!',' '), '', $palavra));

  // Inverte a palavra
  $invertida = strrev($palavra);

  // Verifica se a palavra original é igual à sua versão invertida
  if ($palavra === $invertida) {
    return true;
  } else {
    return false;
  }
}

if (isset($_POST['verify'])) {
  $entrada = $_POST['word'];

  if (verificarPalindromo($entrada)) {
    $mensagem = "A palavra '$entrada' é um palíndromo.";
  } else {
    $mensagem = "A palavra '$entrada' não é um palíndromo.";
  }
}

// Inclua o arquivo HTML separado
include 'form.html';
?>
