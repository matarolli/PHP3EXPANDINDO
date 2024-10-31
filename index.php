<?php
// Incluindo o cabeçalho e a navegação
include 'src/header.php';
include 'src/nav.php';
?>

<main>
    <section id="datetime">
        <?php
date_default_timezone_set("America/Sao_Paulo"); // Define o fuso horário para São Paulo (Brasil)
?>

        <h2>Data e Hora Atual</h2>
        <p>Data: <?php echo date("d/m/Y"); ?></p>
        <p>Hora: <span id="current-time"><?php echo date("H:i:s"); ?></span></p>
    </section>
</main>

<?php
// Incluindo o rodapé
include 'src/footer.php';
?>