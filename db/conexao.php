<?php
// // Configurações de conexão com o banco de dados
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "primeiro_banco";

// try {
//         // Cria uma nova conexão PDO
//         $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
//         // Configura o modo de erro do PDO para exceções
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//         // Insere o novo registro na tabela "cliente"
//         $stmt = $conn->prepare("SELECT * FROM clientes");
//         $stmt->execute();
//         $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

//         if ($stmt) {
//             print_r($resultado);
//         }
        
//         // Fecha a conexão com o banco de dados
//         $conn = null;
//     } catch(PDOException $e) {
//         echo "Erro: " . $e->getMessage();
//     }

$dbname = 'mysql:host=localhost; dbname=primeiro_banco';
$user= 'root';
$pass = '';

$conn = new PDO($dbname, $user, $pass);

// if ($conn) {
//     echo 'Connect';
// }

?>