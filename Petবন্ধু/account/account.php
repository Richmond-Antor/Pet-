<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Petবন্ধু</title>
</head>
<body>
    <h1>Account</h1>
    <a href="index.php">Go back to Homepage</a>
    <div>
        <h2>User Login</h2>
        <form action="user_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <h2>Admin Login</h2>
        <form action="admin_login.php" method="post">
            <input type="text" name="admin_username" placeholder="Admin Username" required>
            <input type="password" name="admin_password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>