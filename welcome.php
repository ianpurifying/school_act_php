<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php"); // Redirect to login if not logged in
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 1.5rem;
            font-style: oblique;
            color: #006;
            text-align: center;
            padding: 20px;
            background-color: #e0e0e0;
        }
        nav {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1rem;
            font-weight: bold;
            color: #036;
            text-align: center;
            background-color: #dcdcdc;
            padding: 10px;
        }
        main {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .form-section {
            width: 40%;
            border: 2px solid #000;
            padding: 20px;
            background-color: #fff;
        }
        .form-section h2 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-weight: bold;
            color: #fff;
            background-color: #036;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <p>Welcome, <?php echo strtoupper(htmlspecialchars($_SESSION['username'])); ?>!</p>
        <a href="logout.php">Logout</a>
    </header>

    <nav>Home | Designs | About | Contact | YouTube</nav>

    <main>
        <div class="form-section">
            <h2>Register Here</h2>
            <form action="" method="post" id="registerForm">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age</label>
                <input type="text" id="age" name="age" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>

                <label>Gender</label>
                <label><input type="radio" name="gender" value="male" required> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>

                <label for="country">Country</label>
                <input type="text" id="country" name="country">

                <label for="skills">Skills</label>
                <textarea name="skills" id="skills" rows="4" placeholder="List your skills"></textarea>

                <label for="idea">Idea</label>
                <input type="text" id="idea" name="idea">

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>
</html>
