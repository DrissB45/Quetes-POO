<?php

require 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = 'SELECT * FROM friend';
$statement = $pdo->query($query);
$friendsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);

$statement->bindValue(':firstname', $_POST['firstname'], \PDO::PARAM_STR);
$statement->bindValue(':lastname', $_POST['lastname'], \PDO::PARAM_STR);
$statement->execute();

$newFriend = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($friendsArray as $friend) { ?>
            <li><?= $friend['firstname'] . ' ' . $friend['lastname'] ?></li>
        <?php } ?>
    </ul>

    <h1>Formulaire de Friend</h1>
    <form action="" method="post">
        <div>
            <label for="firstname">First name :</label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div>
            <label for="lasttname">Last name :</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <button>Submit</button>
    </form>

</body>

</html>