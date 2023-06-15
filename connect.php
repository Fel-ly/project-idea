<!DOCTYPE html>
<html lang="en">
<head>
    <title>Directions</title>
</head>
<body>
    <h1>Directions</h1><br><br>
     <marquee behaviour="scroll"><b>Welcome to ASKME</b></marquee>

    <?php
    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "askme";

    $conn = new mysqli($servername, $root, $askme);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $destination = $_GET['destination'];
    $transport = $_GET['transport'];

    // Prepare and execute the database query
    $stmt = $conn->prepare("SELECT stage, transport FROM destinations WHERE destination = ?");
    $stmt->bind_param("s", $destination);
    $stmt->execute();
    $stmt->bind_result($stage, $dbTransport);
    $stmt->fetch();
    $stmt->close();

    if ($stage && $dbTransport) {
        if ($transport == $dbTransport) {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for $destination.";
        }
    } else {
        $message = "Destination not found.";
    }

    echo $message;

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
