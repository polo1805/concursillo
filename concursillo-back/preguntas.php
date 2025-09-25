<?
ini_set('max_execution_time', 120);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");   // permitir cualquier origen
header("Access-Control-Allow-Headers: *");  // permitir cualquier cabecera
header("Content-Type: application/json");
$urlFaciles = "https://opentdb.com/api.php?amount=5&difficulty=easy&type=multiple";
$urlMedias = "https://opentdb.com/api.php?amount=5&difficulty=medium&type=multiple";
$urlDificiles = "https://opentdb.com/api.php?amount=5&difficulty=hard&type=multiple";
$preguntas = array();
function getPreguntasFaciles($urlFaciles){
    $response = file_get_contents($urlFaciles);
    $data = json_decode($response, true); 
    sleep(6);
    return $data["results"];
    
}
function getPreguntasMedias($urlMedias){
    $response = file_get_contents($urlMedias);
    $data = json_decode($response, true); 
    sleep(6);
    return $data["results"];
}
function getPreguntasDificles($urlDificiles){
    $response = file_get_contents($urlDificiles);
    $data = json_decode($response, true); 
    return $data["results"];
}
$preguntas = array_merge(
    getPreguntasFaciles($urlFaciles),
    getPreguntasMedias($urlMedias),
    getPreguntasDificles($urlDificiles)
);
echo json_encode($preguntas);
?>
