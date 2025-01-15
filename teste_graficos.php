<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown com Pesquisa e Preenchimento Automático</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #patrimonio-dropdown {
            width: 100%;
            padding: 8px;
            font-size: 16px;
        }

        .dropdown-container {
            position: relative;
            max-width: 400px;
            margin: auto;
        }

        .dropdown-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ccc;
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
        }

        .dropdown-results div {
            padding: 8px;
            cursor: pointer;
        }

        .dropdown-results div:hover {
            background-color: #f0f0f0;
        }

        .form-group {
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="dropdown-container">
        <input type="text" id="search-input" placeholder="Digite para pesquisar..." autocomplete="off">
        <div class="dropdown-results" id="dropdown-results"></div>
    </div>

    <div class="form-group">
        <label for="serial">Serial:</label>
        <input type="text" id="serial" readonly>

        <label for="id_mac">ID MAC:</label>
        <input type="text" id="id_mac" readonly>
    </div>

    <script>
        $(document).ready(function () {
            $('#search-input').on('input', function () {
                const query = $(this).val();

                if (query.length > 2) { // Inicia pesquisa após 3 caracteres
                    $.ajax({
                        url: 'search.php',
                        method: 'GET',
                        data: { query: query },
                        success: function (response) {
                            const results = JSON.parse(response);
                            const dropdown = $('#dropdown-results');
                            dropdown.empty();

                            if (results.length > 0) {
                                results.forEach(item => {
                                    dropdown.append(
                                        `<div 
                                            data-id="${item.id}" 
                                            data-serial="${item.serial}" 
                                            data-id-mac="${item.id_mac}"
                                        >${item.descricao}</div>`
                                    );
                                });
                            } else {
                                dropdown.append('<div>Nenhum resultado encontrado</div>');
                            }
                        }
                    });
                } else {
                    $('#dropdown-results').empty();
                }
            });

            // Evento para selecionar a opção
            $(document).on('click', '.dropdown-results div', function () {
                const descricao = $(this).text();
                const serial = $(this).data('serial');
                const idMac = $(this).data('id-mac');

                // Preenche os campos automaticamente
                $('#search-input').val(descricao);
                $('#serial').val(serial);
                $('#id_mac').val(idMac);

                // Limpa o dropdown
                $('#dropdown-results').empty();
            });
        });
    </script>
</body>
</html>
