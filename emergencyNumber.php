<?php

include('db_config.php');

if (isset($_GET['submit'])) {
    $thanaName = $_GET['location'];
    $sql = "SELECT PhoneNumber FROM thana_number 
            WHERE LoacationName = '" . $thanaName . "'";
    $result = mysqli_query($conn, $sql);
    $number = "";

    if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
            $number = $row[0];
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="GET" class="area">
        <input type="text" name="location" class="text-field">
        <input type="submit" value="Thana Number" name="submit" class="submit-button">
    </form>

    <br>
    <div class="numberArea">
        <?php
        if ($number == "")
            echo "<p class=pera>No Number Found!</p>";
        else
            echo "<button class=numberButton>
            <a class=tel-link href=tel:>" . $number . "</a> 
            </button>";
        ?>
    </div>




</body>

</html>
