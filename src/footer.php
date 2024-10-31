<footer>
    <p>&copy; 2024 Meu site. Todos os direitos reservados.</p>
</footer>
</body>
<script>
function updateClock() {
    // Cria uma nova instância de data
    const now = new Date();

    // Formata a hora para HH:MM:SS
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    // Atualiza o elemento com o ID "current-time"
    document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;
}

// Atualiza o relógio a cada segundo
setInterval(updateClock, 1000);
</script>

</html>