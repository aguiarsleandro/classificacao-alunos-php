<?php

$nome = "Ash Ketchum";
$nota = 4;
echo "Aluno: " . $nome . ", nota: " . $nota;

if ($nota >=7) {
    echo ", situação: Aprovado";
} elseif ($nota >=5) {
    echo ", situação: Recuperação";
} else {
    echo ", situação: Reprovado";   
}