<?php
    include('connection.php');
    session_start(); // Start a session for user management

    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // Prepare a statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $_SESSION['username'] = $username; // Store username in session
            header("Location: welcome.php");
            exit();
        } else {
            echo '<script>
                    alert("Login failed. Invalid username or password!");
                    window.location.href = "index.php";
                    </script>';
        }
        
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>
