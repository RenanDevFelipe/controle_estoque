<?php

require_once '../atentication/index.php';
$page_name = 'Dashboard';

include_once '../requisicoes_api/eq_alocado.php';
include_once '../requisicoes_api/eq_comodato.php';
include_once '../requisicoes_api/eq_disponivel_tec.php';
include_once '../requisicoes_api/eq_disponivel.php';
include_once '../requisicoes_api/eq_indisponivel.php';
include_once '../requisicoes_api/eq_inutilizado.php';
include_once '../requisicoes_api/eq_vendido.php';

$data = [
    'labels' => ['Alocado', 'Comodato', 'Disponivel Tec.', 'Disponivel', 'Indisponível', 'Inutilizado', 'Vendido'],
    'values' => [$count_alocado, $count_comodato, $count_disp_tec, $count_disponivel, $count_indisponivel, $count_inutilizado, $count_vendido]
];

$pizza = [
    'labels' => ['Disponivel', 'Indisponivel', 'inutilizado'],
    'values' => [$count_disponivel, $count_indisponivel, $count_inutilizado]
];

$comodato_vendido = [
    'labels' => ['Comodato', 'Vendido'],
    'values' => [$count_comodato, $count_vendido]
]


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard.css?=3">
    <?php
    include_once '../metas/meta_dashboard.php';
    ?>
    <title>Control Z - Dashboard</title>
</head>

<body>
    <?php
    include_once '../sidebar/index.php';

    ?>

    <section class="home">
        <section class="dashboard-api-ixc text">
            <div class="title" style="margin-top: 2%;">
                <i class='bx bx-home-alt icon'></i>
                <h1><?php echo $page_name ?></h1>
            </div>
            <div class="container-dashboard">
                <div class="box-conteudo-api alocado">
                    <span>Alocado</span>
                    <p class="conteudo-api"><?php echo $count_alocado ?></p>
                </div>

                <div class="box-conteudo-api comodato">
                    <span>Comodato</span>
                    <p class="conteudo-api"><?php echo $count_comodato ?></p>
                </div>

                <div class="box-conteudo-api disponivel_t">
                    <span>Disponivel T.</span>
                    <p class="conteudo-api"><?php echo $count_disp_tec ?></p>
                </div>

                <div class="box-conteudo-api disponivel">
                    <span>Disponível</span>
                    <p class="conteudo-api"><?php echo $count_disponivel ?></p>
                </div>

                <div class="box-conteudo-api indisponivel">
                    <span>indisponivel</span>
                    <p class="conteudo-api"><?php echo $count_indisponivel ?></p>
                </div>

                <div class="box-conteudo-api inutilizado">
                    <span>Inutilizado</span>
                    <p class="conteudo-api"><?php echo $count_inutilizado ?></p>
                </div>

                <div class="box-conteudo-api vendido">
                    <span>Vendido</span>
                    <p class="conteudo-api"><?php echo $count_vendido ?></p>
                </div>
            </div>
        </section>

        <section class="graficos-dashboard-api text">
            <div class="conatiner-graficos">
                <div class="divisao1-graficos">
                    <div class="chart-container">
                        <h3>Produtos gerais</h3>
                        <canvas id="graficoLinha"></canvas>
                    </div>

                    <div class="chart-container">
                        <h3>Produtos gerais</h3>
                        <canvas id="graficoBarra"></canvas>
                    </div>
                </div>

                <div class="divisao2-graficos">
                    <!-- Gráfico de Linhas -->
                    <div class="chart-container pizza">
                        <h3>Produtos Status Disponivel, indisponivel e inutilizado</h3>
                        <canvas id="graficoPizza"></canvas>
                    </div>

                    <!-- Gráfico de Linhas -->
                    <div class="chart-container pizza">
                        <h3>Produtos Status Comodato e Vendido</h3>
                        <canvas id="graficoPizza2"></canvas>
                    </div>
                </div>

            </div>
        </section>
    </section>
</body>

<?php

include_once '../src_script/script_sidebar.php';

?>

<script>
    // Dados do PHP para labels e valores
    const labels = <?php echo json_encode($data['labels']); ?>;
    const values = <?php echo json_encode($data['values']); ?>;


    // 2. Gráfico de Barras Horizontais
    const ctxBarra = document.getElementById('graficoBarra').getContext('2d');
    new Chart(ctxBarra, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Quantidade',
                data: values,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                hoverBackgroundColor: ['#FF4B74', '#249CEB', '#E6B044', '#3FBFBF', '#884DFF'],
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                x: {
                    ticks: {
                        display: false // Oculta os labels no eixo X
                    }
                },
                y: {
                    ticks: {
                        display: false // Oculta os labels no eixo Y
                    }
                }
            },
            plugins: {
                legend: {
                    display: false // Oculta a legenda
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || ''; // Exibe o label no hover
                            const value = context.raw; // Exibe o valor
                            return `${label}: ${value}`;
                        }
                    }
                }
            }
        }
    });

    // 3. Gráfico de Linhas
    const ctxLinha = document.getElementById('graficoLinha').getContext('2d');
    new Chart(ctxLinha, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Tendência',
                data: values,
                borderColor: '#36A2EB',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            scales: {
                x: {
                    ticks: {
                        display: false // Oculta os labels no eixo X
                    }
                },
                y: {
                    ticks: {
                        display: false // Oculta os labels no eixo Y
                    }
                }
            },
            plugins: {
                legend: {
                    display: false // Oculta a legenda
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || ''; // Exibe o label no hover
                            const value = context.raw; // Exibe o valor
                            return `${label}: ${value}`;
                        }
                    }
                }
            }
        }
    });

    const label = <?php echo json_encode($pizza['labels']); ?>;
    const value = <?php echo json_encode($pizza['values']); ?>;
    // Gráfico de Pizza
    const ctxPizza = document.getElementById('graficoPizza').getContext('2d');
    new Chart(ctxPizza, {
        type: 'pie',
        data: {
            labels: label,
            datasets: [{
                data: value,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                hoverBackgroundColor: ['#FF4B74', '#249CEB', '#E6B044']
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'right'
                }
            }
        }
    });

    const label2 = <?php echo json_encode($comodato_vendido['labels']); ?>;
    const value2 = <?php echo json_encode($comodato_vendido['values']); ?>;
    // Gráfico de Pizza
    const ctxPizza2 = document.getElementById('graficoPizza2').getContext('2d');
    new Chart(ctxPizza2, {
        type: 'pie',
        data: {
            labels: label2,
            datasets: [{
                data: value2,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                hoverBackgroundColor: ['#FF4B74', '#249CEB', '#E6B044']
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'right'
                }
            }
        }
    });

</script>

</html>