<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" step="0.1" required><br><br>
 
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" step="0.01" required><br><br>
 
        <input type="submit" value="Calcular IMC">
    </form>
 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
   
            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                $imc = number_format($imc, 2, ',', '.');
   
                echo "<h2>Seu IMC é: $imc</h2>";
   
                // Classificação
                if ($imc < 18.5) {
                    echo "<p>Classificação: Abaixo do peso</p>";
                } elseif ($imc < 24.9) {
                    echo "<p>Classificação: Peso normal</p>";
                } elseif ($imc < 29.9) {
                    echo "<p>Classificação: Sobrepeso</p>";
                } else {
                    echo "<p>Classificação: Obesidade</p>";
                }
            } else {
                echo "<p>Altura inválida!</p>";
            }
        }
    ?>
</body>
</html>
 