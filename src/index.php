<?php
require_once('conection.php');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $conn = Connection::newConnection();
    $sql = "INSERT INTO test (name, age) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $name, $age);

    if ($stmt->execute()) {
        echo 'sucesso';
    } else {
        echo 'erro';
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="#" method="post">
        <label for="name">Nome</label>
        <input type="name" name="name">
        <label for="age">idade</label>
        <input type="age" name="age">
        <button type="submit" name="save">Savar</button>
    </form>
</body>

</html>