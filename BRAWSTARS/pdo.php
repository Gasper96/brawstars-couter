<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=brawstars;charset=utf8mb4","root",""); 
}catch (PDOException $e){
    echo "conexão com o banco de dados mal sucedida!".$e->getMessage();
};

/**
 * função utilizada para salvar dados no db quando a partida for vitória
 * @param object $pdo parâmetro que armazena a conexão com o db
 * @param string $mododejogo que armazena o modo de jogo da partida
 * @param string $selectedmapa armazena o mapa da partida
 * @param string $selectedbrawler armazena o brawler selecionado
 * @param bool $resultado
 * @param int $desempenho OPCIONAL armazena o kd da partida
 */
function salvar($pdo,$mododejogo,$selectedmapa,$selectedbrawler,$resultado, $desempenho = 0){
    $sql = "INSERT INTO partida (modoJogo,mapaJogo,brawler,resultado,desempenho) VALUES(:modoJogo,:mapaJogo,:brawler,:resultado,:desempenho)";
                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    ":modoJogo"=> $mododejogo,
                    ":mapaJogo"=> $selectedmapa,
                    ":brawler"=> $selectedbrawler,
                    ":resultado"=> $resultado,
                    ":desempenho"=> $desempenho
                    ]);
                echo "dados salvos.";
};


?>