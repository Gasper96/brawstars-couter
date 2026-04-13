<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once("model.php");

    if (!empty($_GET['mododejogo'])) {
        $mododejogo = $_GET['mododejogo'];
    };
    ?>


    <form method = "post" action = "result.php">
        <h1>brawlers</h1>
        <select name = "brawler" placeholder="brawler">
            <?php 
            foreach ($brawlers as $brawl):?>
                <option nome = <?=$brawl?>><?=$brawl?></option>
            <?php endforeach;?>
        </select>

            </br>

        <select name = "mapa">
            <?php foreach ($$mododejogo as $maps): ?>
                <option nome = <?=$maps?>> <?=$maps?></option>
            <?php endforeach; ?>
        </select>

        <input type="hidden" name="mododejogo" value="<?= $mododejogo ?>"/>
       <button> selecionar. </button>
    </form>
    <form action = "index.php">
        <button>Sair</button>
    </form>
</body>
</html>