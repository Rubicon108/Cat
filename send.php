<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $email = htmlspecialchars($_POST["email"]);

    $to = "soriomatteo28@gmail.com";
    $subject = "Nuova Registrazione - Aiuto Gatti";
    $message = "Hai ricevuto una nuova disponibilità:\n\n";
    $message .= "Nome: $nome\n";
    $message .= "Telefono: $telefono\n";
    $message .= "Email: $email\n";

    $headers = "From: no-reply@tuosito.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Grazie per esserti registrato! Ti contatteremo presto 🐱</h2>";
    } else {
        echo "<h2>Errore nell'invio. Per favore riprova.</h2>";
    }
} else {
    echo "Metodo non consentito.";
}
?>
