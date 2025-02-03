<?php

require_once '../../atentication/index.php';
$page_name = 'Produtos';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/produto.css?v=1">
    <?php
    include_once '../../metas/meta_dashboard.php';
    ?>
    <title>Control Z - <?php echo $page_name ?></title>
</head>

<body>
    <?php
    include_once '../../sidebar/index.php';
    ?>
    <section class="home">
        <section class="dashboard-api-ixc text">
            <div class="title" style="margin-top: 2%;">
                <i class='bx bx-home-alt icon'></i>
                <h1><?php echo $page_name ?></h1>
            </div>

            <div class="bd-productos">
                <div>
                    <div class="buttons-adm-produtos">
                        <div class="box-bnt-adm">
                            <button class="bnt-adm add"><i class="bx bx-plus"></i> Adicionar Produto</button>
                        </div>
                        <div class="box-bnt-adm">
                            <button class="bnt-adm importar"><i class="bx bx-import"></i> Importar tabela de Produtos </button>
                        </div>
                    </div>
                    <div class="box-search">
                        <i id="icone-pesquisa-produto" class="bx bx-search"></i>
                        <input type='search' placeholder="Digite o Patrimonio + Enter">
                    </div>


                    <div class="container-tb">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço Unitário</th>
                                    <th>Categoria</th>
                                    <th>Fornecedor</th>
                                    <th>Data de Entrada</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Monitor 24"</td>
                                    <td>15</td>
                                    <td>R$ 800,00</td>
                                    <td>Eletrônicos</td>
                                    <td>Tech Supplies</td>
                                    <td>15/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Teclado Mecânico</td>
                                    <td>30</td>
                                    <td>R$ 250,00</td>
                                    <td>Periféricos</td>
                                    <td>Key Masters</td>
                                    <td>10/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cadeira Gamer</td>
                                    <td>8</td>
                                    <td>R$ 1200,00</td>
                                    <td>Móveis</td>
                                    <td>Comfort Line</td>
                                    <td>08/01/2025</td>
                                    <td>Em Estoque</td>
                                    <td class="actions">
                                        <button class="details">Detalhes</button>
                                        <button class="edit">Editar</button>
                                        <button class="delete">Deletar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </section>
</body>
<?php

include_once '../../src_script/script_sidebar.php';

?>

</html>