<?php
sleep(3);
// Habilita o suporte para requisições cross-origin (opcional)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

// Verifica se o método da requisição é POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lê o corpo da requisição
    $json = file_get_contents("php://input");
    
    // Converte a string JSON para um objeto PHP
    $data = json_decode($json, true);
    
    // Agora você pode fazer algo com os dados
    // Exemplo: $nome = $data["nome"];
    //          $email = $data["email"];
    
    // Envia uma resposta de sucesso
    http_response_code(200);
    echo json_encode(["message" => "Formulário enviado com sucesso"]);
    
} else {
    // Se o método da requisição não é POST, envia uma resposta de erro
    http_response_code(400);
    echo json_encode(["message" => "Método de requisição não permitido"]);
}