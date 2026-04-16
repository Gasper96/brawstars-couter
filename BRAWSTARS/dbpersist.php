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
            $resultado = true;
            salvar($pdo,$mododejogo,$selectedmapa,$selectedbrawler,$resultado,$desempenho);

        }elseif($resultado == "defeat"){
            $resultado = false;
            salvar($pdo,$mododejogo,$selectedmapa,$selectedbrawler,$resultado,$desempenho);
 
        }else {
            header("location:index.php");
            exit;
        };
}else{
    header("location:index.php");
    exit;
}
};
?>
<html>
    <body>
        <form action="index.php">
            <button>NOVA PARTIDA</button>
        </form>
    </body>
</html>