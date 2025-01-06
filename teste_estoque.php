<?php 

require_once 'api/api.php';

$params = array(
    'qtype' => 'patrimonio.serial',
    'query' => '0437',
    'oper' => '=',
    'page' => '1',
    'rp' => '1',
    'sortname' => 'patrimonio.id',
    'sortorder' => 'desc'

);

$api->get('patrimonio', $params);
$retorno = $api->getRespostaConteudo(false);
$retorno = json_decode($retorno);

$teste = $retorno->registros[0]->situacao;

$maps = [
    '4' => 'Comodato',
    '7' => 'Disponível técnico'
];

$situacao = $maps[$retorno->registros[0]->situacao];

print_r($situacao);

?>