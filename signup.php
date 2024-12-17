<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            
            <div class="form-body">
                <h2 class="title">Log In</h2>
                
                <form action="signup.php" class = "the-form" method = "POST">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"required>

                    <input type="submit" value="Log In">

                </form>

            </div>

            <div class="form-footer">
                <div>
                    <span>Already Have an account?</span> <a href="login.php">Log In</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>