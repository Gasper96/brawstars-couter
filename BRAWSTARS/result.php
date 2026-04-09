<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>resultados</h1>
    <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["char"] && $_POST["mapa"])){
            $selectedbrawler = $_POST["char"];
            $selectedmapa = $_POST["mapa"];

            echo "você está jogando no mapa $selectedmapa com o brawler $selectedbrawler.";
        };
    };
        echo "</br>";
        echo "informe as estatísticas do jogo:"
    ?>
    <form>
        <select name="result">
            <option value="win">ganhei</option>
            <option value="defeat">perdi</option>
        </select>
        <input type="number" name="kd" placeholder="informe seu KD">
        <button>Registrar</button>
    </form>
    <form action="index.php">
    <button>Cancelar</button>
    </form>
</body>
</html>