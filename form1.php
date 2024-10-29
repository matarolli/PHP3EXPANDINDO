<?php
// Incluindo o cabeçalho e a navegação
include 'src/header.php';
include 'src/nav.php';
?>


    <!-- Formulário para Método POST -->
    <section id="post-form">
        <h2>Formulário com Método POST</h2>
        <form action="src/form-handler.php" method="POST">
            <label for="email">Digite seu e-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </section>
    
</section>



</main>

<?php
// Incluindo o rodapé
include 'src/footer.php';
?>
