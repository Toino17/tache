<?php

include '../Models/Model.php';

class Post extends Model{

    public function insert($task){
        $sql = "INSERT INTO `task`(`task`) VALUES (:task)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':task', $task);
        $stmt->execute();
        if ($stmt->execute()) {
            $response = array("message" => "Données insérées avec succès");
        } else {
            $response = array("message" => "Erreur lors de l'insertion des données");
        }
        echo json_encode($response);
    } 

    public function delete($id){
        $sql = "DELETE FROM `task` WHERE `id_task` = $id;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        if ($stmt->execute()) {
            $response = array("message" => "Données supprimées avec succès");
        } else {
            $response = array("message" => "Erreur lors de la suppression des données");
        }
        echo json_encode($response);
    }    
}

$post = new Post;

if (isset($_POST['addTaskInput'])) {
    $task = $_POST['addTaskInput'];
    $post->insert($task);   
}


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $post->delete($id);
}

header('Content-Type: application/json');


