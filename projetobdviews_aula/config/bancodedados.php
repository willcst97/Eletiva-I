<?php
$host = "localhost";
$db = "banco_php";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha);
    if ($pdo) {
        echo "Conexão realizada com sucesso!";
    } else {
        echo "Erro ao conectar o banco de dados!";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

?>

<!--
em C#:
Classe c = new Classe();
c.acao();

em PHP:
$c = new Classe();
$c->acao();
-->