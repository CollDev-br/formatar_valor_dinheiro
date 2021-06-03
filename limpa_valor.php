<?php

function limpa_valor($valor) {
    // Tira os R$ quando tem 
    $valor_tratado_1 = explode('R$', $valor);
    // Tira os pontos
    $valor_sem_ponto = explode('.', end($valor_tratado_1));
    $valor_sem_ponto_1 = NULL;
    foreach ($valor_sem_ponto as $key => $value) {
        $valor_sem_ponto_1 .= $value;
    }
    // Tira a virgula 
    $valor_sem_virgula = explode(",", $valor_sem_ponto_1);
    $valor_sem_virgula_1 = implode(".", $valor_sem_virgula);
    return number_format($valor_sem_virgula_1, 2, '.', ''); 
}
