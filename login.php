<?php
    include "service/db_user.php";

    $login_message = "";

    if (isset($_POST['login'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if ($result->num_rows > 0){
            $data = $result->fetch_assoc();
            header("Location: index.php");
            exit();
        } else {
            $login_message = "Akun Tidak Ditemukan";
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
        .srouce {
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">Log In</h2>
                
                <!-- Menampilkan pesan error -->
                <?php if (!empty($login_message)): ?>
                    <div class="error-message"><?= $login_message; ?></div>
                <?php endif; ?>
                
                <form action="login.php" class="the-form" method="POST">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>

                    <input type="submit" name="login" value="Log In">

                </form>
            </div>

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="signup.php">Sign Up</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
