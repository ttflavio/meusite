<?php
include_once('TEMPLATES/topo.php');
include_once('TEMPLATES/menu.php');
?>

<section>
    <h2>Fale Conosco</h2>
    <form action="envio_mensagem.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <input type="submit" value="Enviar">
    </form>
</section>

<?php
include_once('TEMPLATES/rodape.php');
?>
