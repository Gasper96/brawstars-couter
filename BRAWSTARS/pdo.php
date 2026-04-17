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

/**
 * retorna a quantidade total de partidas salvas
 * @param object $pdo parâmetro que armazena a conexão com o db
 * @return array retorna o indice do array asssociativo que contém o valor de itens totais.
*/
function partidastotais($pdo){
    $sql = "SELECT COUNT(*) AS total_linhas FROM partida";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['total_linhas'];

}; 

/**
 * 
 */
function partidasbrawler($pdo){
     $sql = "SELECT COUNT(*) AS total_linhas FROM partida WHERE brawler = 'corvo'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['total_linhas'];
};

$teste = partidasbrawler($pdo);
echo "$teste";
?>