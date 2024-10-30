<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe os dados enviados em JSON
$data = json_decode(file_get_contents("php://input"), true);

if ($data === null) {
    echo json_encode(['success' => false, 'error' => 'Dados inválidos.']);
    exit();
}

// Dados da Seção 1
$nome = $data['nome'] ?? null;  
$celular = $data['celular'] ?? null;
$empresa = $data['empresa'] ?? null;
$email = $data['email'] ?? null;

// Verifica se as variáveis foram recebidas
if (is_null($nome) || is_null($celular) || is_null($empresa) || is_null($email)) {
    echo json_encode(['success' => false, 'error' => 'Um ou mais campos obrigatórios estão ausentes.']);
    exit();
}

// Dados das demais seções
$totalSection2 = $data['totalSection2'];
$totalSection3 = $data['totalSection3'];
$totalSection4 = $data['totalSection4'];
$totalSection5 = $data['totalSection5'];
$totalSection6 = $data['totalSection6'];
$totalSection7 = $data['totalSection7'];
$totalSection8 = $data['totalSection8'];
$totalSection9 = $data['totalSection9'];

// Insere os dados na tabela
$sql = "INSERT INTO info_form (nome, celular, empresa, email, section2, section3, section4, section5, section6, section7, section8, section9) 
        VALUES ('$nome', '$celular', '$empresa', '$email', '$totalSection2', '$totalSection3', '$totalSection4', '$totalSection5', '$totalSection6', '$totalSection7', '$totalSection8', '$totalSection9')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

// Fecha a conexão
$conn->close();
?>
