<?php 

require_once '../api/api.php';

$dados = [
   'qtype' => 'patrimonio.id',
    'query' => '1',
    'oper' => '>=',
    'page' => '1',
    'rp' => '50000',
    'sortname' => 'patrimonio.id',
    'sortorder' => 'desc'
];

$api->get('patrimonio', $dados);
$retorno = $api->getRespostaConteudo(false);
$retorno = json_decode(json: $retorno);

$registros = $retorno->registros ?? [];

$count_comodato = 0;

foreach ($registros as $registro) {
    if ($registro->situacao == '4') {
        $count_comodato++;
}}

print_r($count_comodato);

?>