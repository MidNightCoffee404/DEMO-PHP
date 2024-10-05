<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Registration Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex; /* Use Flexbox */
            justify-content: flex-start; /* Align to the left */
            height: 100vh; /* Full height */
        }
        .container {
            max-width: 400px;
            width: 100%; /* Responsive width */
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .message {
            padding: 10px;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .error {
            background-color: red;
        }
        .success {
            background-color: green;
        }
        label {
            margin-top: 10px;
            display: block;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Register</h2>

        <?php if (isset($_GET["error"])): ?>
            <p class="message error"><?php echo htmlspecialchars($_GET["error"]); ?></p>  
        <?php endif; ?>

        <?php if (isset($_GET["success"])): ?>
            <p class="message success"><?php echo htmlspecialchars($_GET["success"]); ?></p>  
        <?php endif; ?>

        <form action="output.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password" required>

            <input type="submit" value="Register">
        </form>
    </div>
   
</body>
</html>