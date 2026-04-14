<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }

        .form-area {
            width: 30%;
        }

        .table-area {
            width: 70%;
        }
    </style>
</head>
<body>

<?php
require_once("model.php");

if (!empty($_GET['mododejogo']) && !empty($_GET['mapa'])) {
    $mododejogo = $_GET['mododejogo'];
    $mapa = $_GET['mapa'];
}
?>

<div class="container">

    <!-- FORMULÁRIO -->
    <div class="form-area">
        <h1>PARTIDA ATUAL</h1>
        <form method="post" action="result.php" >
             <select name="brawler">
                    <option value="" selected disabled hidden> Selecione um brawler</option>
                <?php foreach ($brawlers as $brawl): ?>
                    <option value="<?= $brawl ?>"><?= $brawl ?></option>
                <?php endforeach; ?>
            </select>

            <br><br>

            <input type="hidden" name="mapa" value="<?= $mapa?>"/>
            <input type="hidden" name="mododejogo" value="<?= $mododejogo ?>"/>
            <br><br>

            <button>Selecionar</button>
        </form>

        <br>

        <form action="index.php">
            <button>Sair</button>
        </form>
    </div>

    <!-- TABELA -->
    <div class="table-area">
        <h1>MELHORES ESCOLHAS</h1>

        <table border="1">
            <tr>
                <th>Brawler</th>
                <th>% de vitórias</th>
                <th>Média de KD</th>
            </tr>

            <!-- Exemplo estático (depois você liga no BD) -->
            <tr>
                <td></td>
                <td></td>
                <td>    </td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>