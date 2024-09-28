<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form-container">
        <h2>Sign Up</h2>
        <form action="output.php" method="POST">
            <label for="username">Username</label>
            <input type="username" name="username" id="username" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    
</body>
</html>