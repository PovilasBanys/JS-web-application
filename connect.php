<?php
        if(isset($_POST['submit'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
       
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tvs";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $stmt = $conn->prepare("insert into tvs(first_name, last_name, email) values(?, ?, ?)");
            $stmt->bind_param("sss", $first_name, $last_name, $email);
            $stmt->execute();
            echo "Account created"
            $stmt->close();
            $conn->close();
        }
        }

    else{
        echo "Submit button is not set";
    }
?>