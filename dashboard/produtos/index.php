<?php

require_once '../../atentication/index.php';
$page_name = 'Produtos';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/produto.css">
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
                        <i id="icone-pesquisa-produto"></i>
                        <input type='search' placeholder="Digite o Patrimonio + Enter">
                    </div>

                    <div class="productos-container-bd">

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