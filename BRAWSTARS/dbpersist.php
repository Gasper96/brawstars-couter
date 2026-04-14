<?php
require "pdo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["brawler"]) && !empty($_POST["mapa"])){
            $selectedbrawler = $_POST["brawler"];
            $selectedmapa = $_POST["mapa"];
            $mododejogo = $_POST['mododejogo'];
            $resultado = $_POST['result'];
            $desempenho = $_POST['kd'];

        //PERSISTêNCIA NO BANCO DE DADOS:
        if($resultado == "win"){
            $sql = "INSERT INTO partida (modoJogo,mapaJogo,brawler,resultado,desempenho) VALUES(:modoJogo,:mapaJogo,:brawler,:resultado,:desempenho)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ":modoJogo"=> $mododejogo,
                ":mapaJogo"=> $selectedmapa,
                ":brawler"=> $selectedbrawler,
                ":resultado"=> true,
                ":desempenho"=> $desempenho
                ]);
            echo "dados salvos.";

        }elseif($resultado == "defeat"){
            $sql = "INSERT INTO partida (modoJogo,mapaJogo,brawler,resultado,desempenho) VALUES(:modoJogo,:mapaJogo,:brawler,:resultado,:desempenho)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ":modoJogo"=> $mododejogo,
                ":mapaJogo"=> $selectedmapa,
                ":brawler"=> $selectedbrawler,
                ":resultado"=> false,
                ":desempenho"=> $desempenho
                ]);
            echo "dados salvos.";
        };
 
        }else {
            header("location:index.php");
            exit;
        };
}else{
    header("location:index.php");
    exit;
};
?>
<html>
    <body>
        <form action="index.php">
            <button>NOVA PARTIDA</button>
        </form>
    </body>
</html>