<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $sql = "select * from login where username= '$username' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result); //count the number of rows
    if ($count == 1) {
        header("Location:welcome.php");
    }
    else {
        echo '<script>
            alert("Login failed. Invalid username or password");
            window.location.href = "index.php"; // Redirect back to index.php
        </script>';
    }
}
