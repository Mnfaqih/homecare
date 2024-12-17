<?php
    include "service/db_user.php";

    $register_message = "";

    if (isset($_POST["signup"])) {
        $username = $_POST["email"];
        $password = $_POST["password"];

        
        $check_sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $db->query($check_sql);

        if ($result->num_rows > 0) {
            $register_message = "Akun sudah ada. Silakan gunakan email lain.";
        } else {
            
            
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            if ($db->query($sql)) {
                $register_message = "Akun Berhasil Dibuat. Silakan Log In.";
            } else {
                $register_message = "Pembuatan Akun Gagal. Silakan Coba Lagi.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <style>
        .message {
            text-align: center;
            color: red;
            padding: 10px;
        }
    </style>
    <title>Sign Up</title>
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <div class="form-body">
                <h2 class="title">Sign Up</h2>
                <?php if ($register_message): ?>
                    <div class="message">
                        <?= htmlspecialchars($register_message); ?>
                    </div>
                <?php endif; ?>
                <form action="signup.php" class="the-form" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>

                    <input type="submit" name="signup" value="Sign Up">
                </form>
            </div>

            <div class="form-footer">
                <div>
                    <span>Already have an account?</span> <a href="login.php">Log In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
