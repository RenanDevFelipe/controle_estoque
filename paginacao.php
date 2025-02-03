<?php
// Dados de exemplo (array)
$dados = [
    ['id' => 1, 'nome' => 'João'],
    ['id' => 2, 'nome' => 'Maria'],
    ['id' => 3, 'nome' => 'Carlos'],
    ['id' => 4, 'nome' => 'Ana'],
    ['id' => 5, 'nome' => 'Pedro'],
    ['id' => 6, 'nome' => 'José'],
    ['id' => 7, 'nome' => 'Fernanda'],
    ['id' => 8, 'nome' => 'Rita'],
    ['id' => 9, 'nome' => 'Luiz'],
    ['id' => 10, 'nome' => 'Paula'],
    ['id' => 11, 'nome' => 'Carla'],
    ['id' => 12, 'nome' => 'Ricardo'],
    ['id' => 13, 'nome' => 'Gabriela'],
    ['id' => 14, 'nome' => 'Eduardo'],
    ['id' => 15, 'nome' => 'Luciana'],
];

// Quantidade de registros por página
$registros_por_pagina = 5;

// Página atual (defina como 1 se não estiver definida)
$pagina_atual = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Cálculo do índice inicial e final dos dados
$total_registros = count($dados);
$inicio = ($pagina_atual - 1) * $registros_por_pagina;
$fim = $inicio + $registros_por_pagina;

// Fatiar o array com base na página atual
$dados_pagina = array_slice($dados, $inicio, $registros_por_pagina);

// Total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Exibir a tabela
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nome</th></tr>";
foreach ($dados_pagina as $item) {
    echo "<tr><td>{$item['id']}</td><td>{$item['nome']}</td></tr>";
}
echo "</table>";

// Links de paginação
echo "<div class='pagination'>";
for ($i = 1; $i <= $total_paginas; $i++) {
    $class = $i == $pagina_atual ? 'active' : '';
    echo "<a href='?page=$i' class='$class'>$i</a> ";
}
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: #000;
    }

    .pagination a.active {
        font-weight: bold;
        color: #fff;
        background-color: #007BFF;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<body>

</body>

</html>