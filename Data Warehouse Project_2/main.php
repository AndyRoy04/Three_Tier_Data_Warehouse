<!DOCTYPE html>
<html>
<head>
    <title>Displaying Retrieved Data</title>
</head>
<body>
    <?php
    // Establish database connection
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute query
    $sql = "SELECT * FROM your_table_name";
    $result = $conn->query($sql);

    // Process the result
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Column 1</th><th>Column 2</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["column1"] . "</td>";
            echo "<td>" . $row["column2"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>