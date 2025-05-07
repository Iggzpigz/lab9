<html>
    <head></head>
    <body>
    <?php 
    require_once "settings.php";
    $dbconn = @mysqli_connect (hostname: $host,username: $user,password: $pwd,database: $sql_db);
    if ($dbconn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query (mysql: $dbconn, query: $query);
        if ($result) {}
        else {}
        mysqli_close(mysql: $dbconn);
    } else echo "<p>Unable to connect to the db.</p>";

    while ($row = mysqli_fetch_assoc(result: $result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    } 
    ?>
    </body>
</html>
