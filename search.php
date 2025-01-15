<?php

require_once 'api/api.php';

// Verifica se o parâmetro 'query' foi enviado
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Define os parâmetros para a chamada da API
    $params = array(
        'qtype' => 'patrimonio.serial', // Campo de filtro
        'query' => $query,             // Valor para consultar
        'oper' => '=',              // Operador da consulta
        'page' => '1',                 // Página a ser mostrada
        'rp' => '20',                  // Quantidade de registros por página
        'sortname' => 'patrimonio.id', // Campo para ordenar a consulta
        'sortorder' => 'desc'          // Ordenação (asc= crescente | desc=decrescente)
    );

    // Realiza a consulta na API
    $api->get('patrimonio', $params);
    $response = $api->getRespostaConteudo(false);
    $data = json_decode($response);

    // Processa a resposta da API
    $results = [];
    if (isset($data->registros) && is_array($data->registros)) {
        foreach ($data->registros as $item) {
            $results[] = [
                'id' => $item->id,
                'descricao' => $item->descricao,
                'serial' => $item->serial,
                'id_mac' => $item->id_mac
            ];
        }
    }

    // Retorna os resultados como JSON
    echo json_encode($results);
} else {
    // Retorna um array vazio se o parâmetro 'query' não foi enviado
    echo json_encode([]);
}

?>
