
<html>
    <head>

    </head>
    <body>
        <?php 
        $host = "localhost";         // because XAMPP runs the server locally
        $useranme = "root";          // default username for XAMPP's MySQL
        $password = "";              // default password is empty in XAMPP
        $database = "exhibition_db";  // replace with the actual name of your database

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        ?>
    </body>
</html>