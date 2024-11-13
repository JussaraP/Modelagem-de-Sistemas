<?php
// Defina as configurações do banco de dados
$host = 'localhost'; // Endereço do servidor MySQL (geralmente é 'localhost')
$dbname = 'BancodeDados'; // Nome do banco de dados
$username = 'root'; // Usuário padrão do MySQL no XAMPP (padrão é 'root')
$password = ''; // Senha do usuário (no XAMPP, a senha padrão é vazia)

// Criando a string de conexão PDO
try {
    // Conectando ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Configurações para garantir que os erros sejam tratados corretamente
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Habilita os erros de exceção no PDO

    echo "Conexão bem-sucedida ao banco de dados '$dbname'!<br>";

} catch (PDOException $e) {
    // Se houver erro, exibe a mensagem de erro e para a execução
    die("Erro de conexão: " . $e->getMessage());
}
?>
