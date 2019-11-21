<?php
function displayMembers() {
    require('DB.php');
    $result = mysqli_query($conn, "SELECT * FROM members");
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>';
                echo '<img src="./img/icon/' . $row['imgNum'] . '.png" class="w3-bar-item w3-circle" style="width:85px">';
                echo '<div class="w3-bar-item">';
                echo '<span class="w3-large"> ' . $row['firstName'] . ' ' . $row['lastName'] . '</span><br>';
                echo '<span>' . $row['joinDate'] . '</span>';
                echo '</div>';
                echo '</li>';
            }
    }
}

function countMembers() {
    require('DB.php');
    $result = mysqli_query($conn, "SELECT COUNT(ID) FROM members");
    $rows = mysqli_fetch_row($result);
    return $rows[0];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href = "./main.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Joined!</title>
</head>
<body>
    <div class="scroll w3-container w3-display-middle w3-padding-24">
        <h1 class="w3-center">Leden: <?php echo countMembers(); ?> </h1>
        <ul class="w3-ul w3-card-4 w3-center">
            <?php displayMembers(); ?>
        </ul>
    </div>

    <script src="./main.js"></script>
</body>
</html>