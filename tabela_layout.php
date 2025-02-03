<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Estoque - Layout Ampliado</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            color: #4caf50;
        }

        .container {
            max-width: 1400px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #4caf50;
            color: white;
        }

        th, td {
            padding: 14px 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.05em;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: #f1f5f9;
        }

        td {
            font-size: 14px;
            color: #555;
        }

        .actions {
            text-align: center;
            display: flex;
            justify-content: flex-start;
            gap: 8px;
        }

        .actions button {
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            color: white;
        }

        .actions button:active {
            transform: scale(0.95);
        }

        .details {
            background-color: #3498db;
        }

        .details:hover {
            background-color: #2980b9;
        }

        .edit {
            background-color: #f1c40f;
            color: #333;
        }

        .edit:hover {
            background-color: #d4ac0d;
        }

        .delete {
            background-color: #e74c3c;
        }

        .delete:hover {
            background-color: #c0392b;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }

            th, td {
                padding: 10px 8px;
            }

            .actions {
                flex-direction: column;
                gap: 6px;
            }

            .actions button {
                width: 100%;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <h1>Gestão de Estoque</h1>
    <div class="container">
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
            </tbody>
        </table>
    </div>
</body>
</html>
