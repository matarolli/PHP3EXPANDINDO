<?php
// Incluindo o cabeçalho e a navegação
include 'src/header.php';
include 'src/nav.php';
?>

<main>
    <!-- Formulário para Método GET -->
    <section id="get-form">
        <h2>Formulário com Método GET</h2>
        <form action="#get-form" method="GET">
            <label for="nome">Digite seu nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        // Usando $_GET para capturar os dados enviados pelo formulário
        if (isset($_GET['nome'])) {
            $nome = htmlspecialchars($_GET['nome']);
            echo "<h3>Olá, $nome! Você usou o método GET.</h3>";
        }
        ?>
    </section>

    <!-- Formulário para Método POST -->
    <section id="post-form">
        <h2>Formulário com Método POST</h2>
        <form action="src/form-handler.php" method="POST">
            <label for="email">Digite seu e-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </section>
    <!-- calcular números -->
    <section id="calculator">
    <h2>Calculadora Simples</h2>
    <form action="#calculator" method="POST">
        <label for="numero1">Digite o primeiro número:</label><br>
        <input type="number" id="numero1" name="numero1" required><br><br>
        
        <label for="numero2">Digite o segundo número:</label><br>
        <input type="number" id="numero2" name="numero2" required><br><br>
        
        <input type="submit" value="Somar">
    </form>

    <?php
    // Incluindo funções matemáticas apenas uma vez
    include_once 'src/math-functions.php';

    // Verificar se os números foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero1"]) && isset($_POST["numero2"])) {
        $num1 = (float)$_POST["numero1"];
        $num2 = (float)$_POST["numero2"];

        // Usar a função somar do arquivo math-functions.php
        $resultado = somar($num1, $num2);

        // Exibir o resultado
        echo "<h3>Resultado: $num1 + $num2 = $resultado</h3>";
    }
    ?>
</section>

<?php
// Incluindo a galeria na página principal
include 'src/gallery.php';
?>

</main>

<?php
// Incluindo o rodapé
include 'src/footer.php';
?>
