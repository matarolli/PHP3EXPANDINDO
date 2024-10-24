<?php
// Usando $_POST para capturar os dados enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
    echo "<h3>Obrigado! Seu e-mail ($email) foi recebido. Você usou o método POST.</h3>";
} else {
    echo "<h3>Erro: Nenhum dado recebido.</h3>";
}
