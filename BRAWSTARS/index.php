<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container {
    width: 100%;
}

.linha {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

button {
    width: 150px;
    height: 100px;
    background-color: lightblue;
    border: 2px solid black;
    text-align: center;
    line-height: 100px;
    font-weight: bold;
}
</style>
</head>
<body>
    <h3> MODOS DE JOGO </h3>
    <div class = "container">
        <div class="linha">
            <div> 
                <form action="salao.php" method ="get">
                <button>PIQUE GEMAS</button>
                <input type = "hidden" name = "mododejogo" value = "piqueGemas">
                </form> 
            </div>

            <div> 
                <form action="salao.php" method ="get">
                <button>Roubo do cofre</button>
                <input type = "hidden" name = "mododejogo" value = "roubo">
                </form> 
            </div>

            <div>
                <form action="salao.php" method ="get">
                    <button>Caça Estrelas</button>
                    <input type = "hidden" name = "mododejogo" value = "cacaEstrelas">

                </form>
            </div>
        </div>

        <div class="linha">
            <div>
                <form action="salao.php" method ="get">
                    <button>nocaute</button>
                    <input type = "hidden" name = "mododejogo" value = "nocaute">
                </form>
            </div>

            <div>
                <form action="salao.php" method ="get">
                    <button>FUT BRAW</button>
                    <input type = "hidden" name = "mododejogo" value = "futbrawl">
                </form>
            </div>

            <div>
                <form action="salao.php" method ="get">
                    <button>Zona Estratégica</button>
                    <input type = "hidden" name = "mododejogo" value = "zonaestrategica">
                </form>
            </div>
        </div>

    </div>
</body>
</html>