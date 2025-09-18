<?
// 5 PREGUNTAS FACILES : 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");   // permitir cualquier origen
header("Access-Control-Allow-Headers: *");  // permitir cualquier cabecera
header("Content-Type: application/json");
$url = "https://opentdb.com/api.php?amount=5&difficulty=easy&type=multiple";
$response = file_get_contents($url);

echo $response;
?>
