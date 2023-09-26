<?php

include '../Models/Model.php';

class Post extends Model{

    public function insert($task){
        $sql = "INSERT INTO `task`(`task`) VALUES (:task)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':task', $task);
        $stmt->execute();
    } 
}

$post = new Post;

if (isset($_POST['addTaskInput'])) {
    $task = $_POST['addTaskInput'];
    $post->insert($task);
    
}
//     $post->insert();
//         if ($stmt->execute()) {
//         $response = array("message" => "Données insérées avec succès");
//     } else {
//         $response = array("message" => "Erreur lors de l'insertion des données");
//     }
// } else {
//     $response = array("message" => "Données manquantes dans la requête POST");



// Retournez une réponse au format JSON
// header('Content-Type: application/json');

echo json_encode($task);
