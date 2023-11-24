<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_app";


$con = new mysqli ($servername, $username, $password, $dbname);

if ($con->connect_error){
    die("Connection Failed" . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM tasks";
    $result = $con->query($sql);

    $todos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $todos[] = $row;
        }
    }
    echo json_encode($todos);
}
elseif($_SERVER['REQUEST_METHOD'] === 'POST');
{
    $data = json_decode(file_get_contents("php://input"));
    $task = $data->task;

    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    $con->query($sql);
};

$con->close();
?>