<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo "<h2>Obrigado, $nome! Sua mensagem foi enviada com sucesso.</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
} else {
    echo "Erro ao enviar a mensagem.";
}
?>
